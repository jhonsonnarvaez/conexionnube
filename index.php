      <?php
        error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
        $server = "us-cdbr-iron-east-02.cleardb.net";
        $username = "b4464e370dc7e8";
        $password = "0b6aa5f2";
        $db = "heroku_6ec1694fce1e9a1";
        $conn = new mysqli($server, $username, $password, $db);
        if ($conn->connect_error)
            die($conn->connect_error);
        else
           echo 'Conexion exitosa' . '<br>' . '<br>';
