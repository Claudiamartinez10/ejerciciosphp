<?php

/*Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. Su política
de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. El gerente de su
compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de comisiones por las
tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones.
*/

$venta1 = 0;
$venta2 = 0;
$venta3 = 0;
$ventat = 0;
$sueldo = 0;
$comision = 0;
$sueldot = 0;
$comisto = 0;
$sueldo2 = 0;

for($i = 0; $i < 30; $i++) {
    $sueldo = readline("Ingrese su sueldo " . ($i + 1));
    $venta1 = readline("Ingrese su venta");
    $venta2 = readline("Ingrese su venta");
    $venta3 = readline("Ingrese su venta");

    $ventat = $venta1 + $venta2 + $venta3;
    $comision = $ventat * 0.10;
    $sueldo2 = $sueldo + $comisto;

    $comisto = $comisto + $comision;
    $sueldot = $sueldot + $comisto;

    echo "_____________________________" .  "\n";
    echo "Su sueldo es: $" .$sueldo .  "\n";
    echo "El total en sus 3 ventas es: $" .$ventat .  "\n";
    echo "Su comision por las 3 ventas es el 10% : $" .$comision . "\n";
    echo "Su sueldo con comisiones es: $" .$sueldo2 . "\n";


}
echo "_______________________________________" .  "\n";
echo "El total de comisiones es: $" . $comisto .  "\n";
echo "El total a pagar en sueldos es: $" .$sueldot .  "\n";
?> 