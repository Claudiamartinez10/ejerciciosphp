<?php
//Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos.

$numero = 0;
//contadores
$contadornulo = 0;
$contadorneg = 0;
$contadorpos = 0;

for ($i=0; $i < 5; $i++) { 
   $numero = readline("DIJITE EL NUMERO ENTERO: " . $i+1);
   if ($numero == 0) {//cuando el numero ingresado sea nulo
    $contadornulo++;
   }else if ($numero < 0) {//cuando el numero ingresado sea negativo
    $contadorneg++;
   }else {//cuando el numnero ingresado sea positivo
    $contadorpos++;
   }
}

echo "\n";
echo "------------------------------\n";
echo "NUMEROS  NULOS: " . $contadornulo . "\n";
echo "NUMEROS  POSITIVOS: " . $contadorpos . "\n";
echo "NUMEROS  NEGATIVOS: " . $contadorneg . "\n";

?>