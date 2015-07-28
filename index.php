<?php
       
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "b93dd65416822b";
        $password = "89003cb9";
        $db = "heroku_5a543f116c54fb0";
        $conn = new mysqli($server, $username, $password, $db);
        if ($conn->connect_error)
            die($conn->connect_error);
            else{
                session_start();
if (isset($_SESSION['usuario']) == true and isset($_SESSION['perfil']) == true) {

    if($_SESSION['perfil']=='Administrador'){
          header("Location: Administrador.php");
    }  else if($_SESSION['perfil']=='Usuario') {
         header("Location: Usuario.php");
    }
}}

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