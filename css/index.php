<?php
include './conexion.php';
if (isset($_SESSION['usuario']) == true or isset($_SESSION['perfil']) == true) {

    if($_SESSION['perfil']=='Administrador'){
          header("Location: Administrador.php");
    }  else if($_SESSION['perfil']=='Usuario') {
         header("Location: Usuario.php");
    }
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
            <h1>Login</h1>
            <form id="form">
            
                <label for="usuario"></label><input type="text" id="usuario" name="usuario" class="placeholder" placeholder="Usuario" required>
                <label for="contrasena"></label><input type="password" id="contrasena" name="contrasena" class="placeholder" placeholder="Contraseña" required>
            <label for="opcion">Elija su área:</label>
            <select id="perfil">
                <option value="administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select>
            <center><input type="button" id="ingresar" value="Iniciar Sesión"></center>
            <div id="mensaje"></div>
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
