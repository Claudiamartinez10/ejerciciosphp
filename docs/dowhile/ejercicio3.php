<?php
/*Un vendedor ha hecho una serie de ventas y desea saber cuántas de éstas fueron de $200 o menos; cuántas
fueron mayores a 200 pero inferiores a 400 y cuántas de 400 o más. Elabore la información para ese
vendedor después de leer los datos de entrada. Considere –1 como fin de datos.*/


$ventas = 0;
$vent1 = 0;
$vent2 = 0;
$vent3 = 0;
$vent4 = "si";
do {
   $ventas = readline("INGRESE SU VENTA" . "\n");
   $vent4 = readline("DESEA INGRESAR MAS" . "\n");
   if($ventas <= 200){
    $vent1++;

}else if($ventas > 200 && $ventas < 400){
    $vent2++;

}else if($ventas >= 400){
    $vent3++;
}
} while ($i == "si");
echo "-----------------------------------------------" . "\n";
echo "SUS VENTAS IGUALES O MENORES A 200 FUERON: " . $vent1 . "\n";
echo "SUS VENTAS MAYORES A 200 Y MENORES DE 400 FUERON: " . $vent2 . "\n";
echo "SUS VENTAS MAYORES A 400 FUERON: " . $vent3 . "\n";
?>