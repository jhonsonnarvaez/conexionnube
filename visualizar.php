
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

    <title>Cliente</title>

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
<br>
<br>
<br>
<br>
<br>
</ul>
<br>
          </div>
  <div class="col-md-9"><ul class="nav nav-pills">
    
    <li role="presentation"><a href="Administrador.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
    <li role="presentation"><a href="cliente.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes</a></li> 
     <li role="presentation"><a href="visualizar.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ingresar un nuevo Cliente</a></li>    
</ul>
<ul class="nav nav-pills nav-stacked">
    <div class="panel panel-default">
  <div class="panel-body">
    Ingresar un nuevo Clientes
  </div>
  <div class="panel-footer">     <?php
        echo '<form id="form" class="navbar-form navbar-left">';
        
        echo '<label for="nombre">Nombre: </label>';
        echo '<input type="text" id="nombre" name="nombre"   required>';
        echo '<label for="apellido">Apellido: </label>';
        echo '<input type="text" id="apellido" name="apellido" required>';
        echo '<label for="direccion">Dirección: </label>';
        echo '<input type="text" id="direccion" name="direccion" required>';
        echo '<label for="telefono">Teléfono: </label>';
        echo '<input type="text" id="telefono" name="telefono" required>';
        echo '<label for="correo">Correo: </label>';
        echo '<input type="email" class="form-control" id="correo" placeholder="Email" name="correo" required>';
        echo '<br>';
        echo '<br>';
        echo '<button type="button" id="ingresar" class="btn btn-primary">Ingresar</button>';
        echo ' <div id="mensaje"></div>';
        echo '</form>';
        ?></div>
</div>


</ul>

</div>
        </div>
  
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main2.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>