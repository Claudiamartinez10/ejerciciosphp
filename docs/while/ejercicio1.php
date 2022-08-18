<?php
/*Obtener suma de los términos de la serie: 2, 5, 7, 10, 12, 15, 17, .... 1800*/


$a = 1;
$num1 = 0;
$suma = 0;

while($num1 <= 1800){
    $num1 = readline("Ingrese un numero");
    if(($a + 2) == 0){
      $num1 += 2;
    }else{
        $num1 += 3;
    }
    $suma = $suma + $num1;
    $a++;


}
echo "La suma es: " . $suma;
?> 