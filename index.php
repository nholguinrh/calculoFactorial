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
   

$numero = (isset($_GET["n"]))? $_GET["n"]:5; 
$resultado = obtieneFactorial($numero); 
echo "Factorial de $numero  = $resultado";
modeloInsertFactorial($numero,$resultado);
$salida=modeloListFactorial();
print_r($salida);
for($i=0;$i<count($salida,0);$i++)
    echo "El factorial de ".$salida[$i][0]." es : ".$salida[$i][1];
?>
