<?php

include './conexion.php';
if (isset($_SESSION['usuario']) == false or isset($_SESSION['perfil']) == false) {
    header('Location: index.php');
} else {
    if ($_SESSION['perfil'] == 'Administrador') {
        header("Location: Administrador.php");
    } else {
        $nombre = mysql_query("SELECT * FROM usuarios WHERE usuario = " . $_SESSION['usuario'] . "");
        $nombre2 = mysql_fetch_array($nombre);
    }
}
?>
