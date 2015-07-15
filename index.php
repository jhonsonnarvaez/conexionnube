<?php

$url = parse_url ( getenv (" CLEARDB_DATABASE_URL "));
$server = $url [" host "];
$username = $url [" user "];
$password = $url [" pass "];
$db = substr ( $url [" path "], 1);

$conn = new mysqli ( $server , $username , $password , $db);

echo "Server" . $server . '<br>';
echo "Username" . $username . '<br>';
echo "Password" . $password . '<br>';
echo "DB" . $db . '<br>';
