<?php
error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
$server = "us-cdbr-iron-east-02.cleardb.net";
$username = "b93dd65416822b";
$password = "89003cb9";
$db = "heroku_5a543f116c54fb0";
$conexion = mysql_connect($server, $username, $password);
mysql_select_db($db,$conexion);
session_start();
$usu = addslashes($_POST['usuario']);
$pass = addslashes($_POST['contrasena']);
$area = addslashes($_POST['perfil']);

$usuario = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu'");
if(mysql_num_rows($usuario)<1){
  echo 'usuario';
}else{
  $area = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND perfil = '$area'");
  if(mysql_num_rows($area)<1){
    echo 'area';
  }else{
    $consulta = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND contrasena = '$pass'");
    if(mysql_num_rows($consulta)<1){
      echo 'password';
    }else{
      $consulta2 = mysql_fetch_array($consulta);
      $_SESSION['usuario'] = $consulta2['usuario'];
      $_SESSION['perfil'] = $consulta2['perfil'];
      switch($consulta2['perfil']){
        case 'Administrador':
          echo 'Administrador';
        break;
        case 'Usuario':
          echo 'Usuario';
        break;
      }
    }
  }
}
?>
