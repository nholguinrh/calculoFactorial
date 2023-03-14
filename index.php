<?php 
include "modelo.inc.php";
// Código PHP para obtener el factorial de un número
// función para obtener factorial de forma iterativa
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
   

$numero = (isset($_GET["cantidad"]))? $_GET["cantidad"]:5; 
for($i=0;$i<count($numero);$i++)
    {
    $n=rand(1,120);
    $resultado = obtieneFactorial($n);
    modeloInsertFactorial($numero,$resultado);
    }

modeloInsertFactorial($numero,$resultado);
$salida=modeloListFactorial();
for($i=0;$i<count($salida,0);$i++)
    echo "El factorial de ".$salida[$i]["base"]." es : ".$salida[$i]["factorial"]."\n<br>";
?>
