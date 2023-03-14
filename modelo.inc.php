<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


$mysqli = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($mysqli->connect_error) {
    die("Fallo la conexion <br> " . $mysqli->connect_error);
}

function modeloInsertFactorial($base,$factorial)
    {
    global $mysqli;
    $sql="INSERT INTO factorial (`base`,`factorial`) VALES ($base,$factorial)";
    $mysqli->query($sql);
    }
function modeloListFactorial()
    {
    global $mysqli;
    $sql="SELECT * FROM factorial";
    $result = $mysqli->query($sql);
    return($result);
    }
?>
