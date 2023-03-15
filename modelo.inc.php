<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


$mysqli = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($mysqli->connect_error) {
    die("Fallo la conexion <br> " . $mysqli->connect_error);
}

function modeloInsertFactorial($hostname,$suma)
    {
    global $mysqli;
    $fecha=time();
    $sql="INSERT INTO factorial (`hostname`,`fecha`,`suma`) VALUES ('".$hostname."',$fecha,$suma)";
    $mysqli->query($sql);
    }
function modeloVaciarFactorial()
    {
    global $mysqli;
    $sql="TRUNCATE TABLE factorial";
    $mysqli->query($sql);
    }
function modeloListFactorial()
    {
    global $mysqli;
    $salida=array();
    $sql="SELECT * FROM factorial";
    $result = $mysqli->query($sql);
    for($i=0;$i<$result->num_rows;$i++)
            $salida[]=$result->fetch_array(MYSQLI_BOTH);
    return($salida);
    }
?>
