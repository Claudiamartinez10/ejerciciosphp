<?php

/*Dados 100 números enteros como datos, obtener:
a) Cuántos números leídos fueron mayores que cero.
b) el promedio de los números positivos
c) el promedio de todos los números
*/

$mayorcero = 0;
$positivos = 0;
$positivoprome = 0;
$prontotal = 0;
$total = 0;
$n = 0;
$total2 = 0;
for($i = 0; $i < 5; $i++){
    $n = readline("Ingrese un numero" . ($i + 1));
if($n > 0){
    $mayorcero++;
    $positivos = $positivos + $n;
}
$total++;
 $prontotal = $prontotal + $n;
}
$positivoprome = $positivos / $mayorcero;
$total2 = $prontotal / $total;

echo "EL TOTAL DE NUMEROS POSITIVOS ES: " . $mayorcero . "\n";
echo "LA SUMA DE NUMEROS POSITIVOS ES: " . $positivos . "\n";
echo "EL PROMEDIO DE NUMEROS POSITIVOS ES: " . $positivoprome . "\n";
echo "EL PROMEDIO DE TODOS LOS NUMEROS ES: " . $total2 . "\n";
echo "LA SUMA DE TODOS LOS NUMEROS ES: " .$prontotal ."\n";
echo "EL TOTAL DE NUMEROS ES: " . $total . "\n";

?>

