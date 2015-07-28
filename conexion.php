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
?>
