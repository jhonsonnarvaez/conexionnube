     <?php
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "b4464e370dc7e8";
        $password = "0b6aa5f2";
        $db = "heroku_6ec1694fce1e9a1";
        $conexion = mysql_connect($server, $username, $password);
       
	mysql_select_db($db,$conexion);
	session_start();
?>
     