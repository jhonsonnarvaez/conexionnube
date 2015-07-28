
<?php
include('conexion.php');



    $nombre = $_POST['nombre_cliente'];
    $apellido = $_POST['apellido_cliente'];
    $dir = $_POST['direccion_cliente'];
    $telf = $_POST['telefono_cliente'];
    $correo = $_POST['correo'];
    $usuario = $_POST['cod_usuario'];

    $resultado = mysql_query("SELECT cod_usuario from usuario WHERE cod_usuario='$usuario'"); 
                $rs=mysql_fetch_array($resultado); 
        $q_insert = ("INSERT INTO cliente(nombre_cliente,apellido_cliente,direccion_cliente,telefono_cliente,correo,cod_usuario)
            VALUES('$nombre','$apellido','$dir','$telf','$correo',."$rs['cod_usuario']".)");

        $res =$myqli->query($q_insert) ;

        if (!$res) {
            echo '<div>Existi&oacute; un error al insertar.' . $conn->error .
            '</div>';
        } else {
            echo '<div>Ingrese todos los campos.</div>';
        }
    




?>