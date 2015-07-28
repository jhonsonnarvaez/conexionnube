<?php
       
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "b93dd65416822b";
        $password = "89003cb9";
        $db = "heroku_5a543f116c54fb0";
        $username=$_POST['usuario'];
        $password=md5($_POST['contrasena']);
        $login=$_POST['perfil'];
        if(isset($login)){
        $conn = new mysqli($server, $username, $password, $db);
        if ($conn->connect_error)
            echo "Failed to connect to MySQL: " . $conn->connect_error;

        $res = $mysqli->query("SELECT * FROM usuarios where usuario='$username' and contrasena='$password'");
        $row = $res->fetch_assoc();
        $name = $row['perfil'];
        $user = $row['usuario'];
        $pass = $row['contrasena'];
  if($user==$username && $pass=$password){ 
   session_start();
   if($_SESSION['Administrador']==$name){
     echo "<script>window.location.assign('Administrador.php')</script>";
   }
   elseif ($_SESSION['Usuario']==$name) {
     echo "<script>window.location.assign('Usuario.php')</script>";
   }}
}

   
    else{
         echo "<script>window.location.assign('index.php')</script>";
    }
  

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inicio</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <div id="caja">
            <center><h1>Login</h1></center>
            <form id="form">
            
                <label for="usuario"></label><center><input type="text" name="usuario" id="usuario"  class="placeholder" placeholder="Usuario" required></center>
                <label for="contrasena"></label><center><input type="password" name="contrasena" id="contrasena"  class="placeholder" placeholder="Contraseña" required></center>
            <center><label for="opcion">Elija su área:</label>
            <select id="perfil">
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select></center>
            <br>
            <center><input type="button" id="ingresar" value="Iniciar Sesión"></center>
      <div class="alert alert-danger" role="alert"><div id="mensaje"></div></div>      
 

            
        </form>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
        <script type="text/javascript" src="js/placeholder.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>      
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>