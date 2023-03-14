<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


$mysqli = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($mysqli->connect_error) {
    die("Fallo la conexion <br> " . $mysqli->connect_error);
}


?>
