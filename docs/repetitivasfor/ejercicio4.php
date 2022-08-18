<?php
 //Dados como datos 300 números enteros, obtener la suma delos números impares y el promedio de los números pares.

 $numero = 0;
 $sumapares = 0; 
 $sumaimpares= 0;
 $contaimpart = 0;
 $promedio = 0;

 for ($i= 1; $i < 5; $i++) { 
    $numero = readline ("NUMERO # " . $i . "-");
    if ($numero % 2 == 0) {
        $sumapares += $numero;
        //pares
    }else {
        $contaimpart++;
        $sumaimpares += $numero; 
        //promedio
        //impares
    }
 } //fin for

 $promedio = $sumaimpares / $contaimpart;

 echo "\nSUMA DE NUMEROS PARES : " . $sumapares . "\n";
 echo "PROMEDIO DE NUMEROS IMPARES: " . number_format ($promedio, 2 ) . "\n";


?>
