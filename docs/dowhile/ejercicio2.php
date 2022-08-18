<?php

/*Determinar la media de ventas de X empleados. Cada empleado hace N ventas, el proceso se debe repetir si el
usuario lo requiere.*/ 
$venta = 0;
$media = 0;
$media2 = 0;
$ventas = 0;
$a = "si";
$empleados = 1;
$i = 1;
do {
    $a = readline("INGRESAR  VENTAS" . "\n");

    if($a == "si"){
        $empleados = readline("VENTAS A INGRESAR" . "\n");
        for ($i=1; $i <= $empleados; $i++) { 
           $venta = readline("INGRESE SU VENTA " . ($i) . "\n");
           $media = $media + $venta;
        }

    }
    $ventas++;
} while ($a == "si");
$media2 = $media / $ventas;
echo "LA MEDIA DE N EMPLEADOS ES " . $media2 . "\n";
?>