<?php 
// Código PHP para obtener el factorial de un número
// función para obtener factorial de forma iterativa
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

$iteraciones = (isset($_GET["cantidad"]))? $_GET["cantidad"]:5; 
$suma=0;
for($i=0;$i<$iteraciones;$i++)
    {
    $n=rand(1,120);
    $resultado = obtieneFactorial($n);
    $sqrt=ceil(sqrt($resultado));
    $suma+=ceil(sqrt($resultado));
    $k=0;
    for($j=0;$j<10000;$j++)
        $k+=sqrt(obtieneFactorial($n));
    echo $i." => El factorial de ".$n." es : ".$resultado." y el entero de la raiz del factorial".$sqrt." \r\n <br>";
    }
echo "suma para consumo de RAM ".$suma." ***************************************************** \n\r <br>";

$hostname = gethostname();
include "modelo.inc.php";
modeloInsertFactorial($hostname,$suma);
$salida=modeloListFactorial();
$mysqli->close();
for($i=0;$i<count($salida,0);$i++)
    {
    echo $i." => Desde el pod ".$salida[$i]["hostname"]." | fecha ".date(DATE_RFC2822,$salida[$i]["fecha"])." | suma:".$salida[$i]["suma"]." \r\n <br>";
    }
?>
