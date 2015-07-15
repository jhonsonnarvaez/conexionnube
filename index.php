<?php

$url = parse_url ( getenv (" CLEARDB_DATABASE_URL "));
$server = $url [" us-cdbr-iron-east-02.cleardb.net"];
$username = $url [" be505b883b85da "];
$password = $url [" b22b5198 "];
$db = substr ( $url [" heroku_a6c93f827357fde "], 1);

$conn = new mysqli ( $server , $username , $password , $db);

echo "Server" . $server . '<br>';
echo "Username" . $username . '<br>';
echo "Password" . $password . '<br>';
echo "DB" . $db . '<br>';

if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';

//Recibir el ide de colecciones

$id = $_POST['id'];

$query = "SELECT autor,titulo,tipo,anio FROM clasicos WHERE id='$id'";
$res = $conn->query($query);
$row = $res->fetch_assoc();
$res->close();
$conn->close();

?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Modificar</title>
    </head>
    <body>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label for="autor"> Autor: </label>
                <input type="text"  name="autor" value="<?php echo $row['autor']; ?>" id="autor"/>
            </div>
            <div>
                <label for="titulo"> T&iacute;tulo: </label>
                <input type="text"  name="titulo" value="<?php echo$row ['titulo']; ?>" id="titulo"/>
            </div>
            <div>
                <label for="tipo"> Tipo: </label>
                <input type="text"  name="tipo" value="<?php echo$row ['tipo']; ?>" id="tipo"/>
            </div>
            <div>
                <label for="anio"> A&ntilde;o </label>
                <input type="text"  name="anio" value="<?php echo$row ['anio']; ?>" id="anio"/>
            </div>
            <div>
                <input type="submit" value="Guardar" name="Guardar" >
            </div>
        </form>
    </body>
</html>

