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
if(isset($_SESSION['usuario'])==false or isset($_SESSION['perfil'])==false){
	header('Location: index.php');
}else{
	if($_SESSION['perfil'] == 'Usuario'){
		header('Location: Usuario.php');
	}else{
		$nombre = mysql_query("SELECT * FROM usuarios WHERE usuario = '".$_SESSION['usuario']."'");
		$nombre2 = mysql_fetch_array($nombre);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
     <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>

  <body>
  <div class="container show-grid">
        <div class="row">
          <div class="col-md-12">
           <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">JM-PC COMPUTER</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="button" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><label>Bienvenido: <?php echo $nombre2['nombre']; ?></label> </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
          	<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="#">Menú</a></li>
  <li role="presentation"><a href="Administrador.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
  <li role="presentation"><a href="cliente.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes</a></li>
  <li role="presentation"><a href="Proveedores.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Proveedores</a></li>
  <li role="presentation"><a href="producto.php">  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Entradas</a></li>
  <li role="presentation"><a href="almacen.php">  <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Almacen</a></li>
  <li role="presentation"><a href="ventas.php">  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Ventas</a></li>
<li role="presentation"><a href="vista_usuario.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</a></li>
<li role="presentation"><a href="longout.php">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Cesión</a></li>
</ul>
<br>
          </div>
  <div class="col-md-9"><ul class="nav nav-pills">
    <li role="presentation"><a href="Administrador.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
   
</ul> <p>
    	<center><h1>Misión</h1></center>
 

Brindar un servicio de venta de equipo tecnológico reacondicionado y nuevo de marcas reconocidas a través de la importación;
ofreciendo de esa manera precios accesibles y cumpliendo con tener una bodega abastecida para cumplir con cualquier requerimiento 
de Colegios,  Empresas y clientes finales cumpliendo con la mejor estética y garantía del mercado.
</p>
<br>
<br>
<p>
 
<center><h1>VISIÓN</h1></center>
 
La visión de esta empresa es la de ser la primera opción de los clientes actuales y futuros, satisfaciendo sus necesidades y requerimientos.
 Además ser reconocida en el ámbito nacional, por la calidad de sus servicios, atención, y mantenerse líder de competitividad en el mercado 
 de la computación.
Lograr los más altos índices de Satisfacción al Cliente por medio de la excelencia en la integración de soluciones especializadas para el 
área de Informática.
Convertirnos en el Proveedor de Computadoras Re acondicionadas más importante de Guatemala.
Consolidar nuestro Liderazgo en hacer de este concepto la fuente más importante de toma de decisiones para nuestros clientes.
Ser una de las mejores empresas de servicio a nivel de computación y de servicio de asistencia técnica.
    </p></div>
        </div>
  
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>