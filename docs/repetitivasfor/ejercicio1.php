<?php
//Dado el sueldo de 20 trabajadores, considere un aumento del 15% a cada uno de ellos, si su sueldo es inferior a $800. Imprima el sueldo con el aumento incorporado.

$sueldo = 0;
$aumento = 0;


for ($i = 0;  $i < 5; $i++) {
    $aumento = 0;
    $sueldo = readline("ESCRIBA EL PRIMER SUELDO DEL EMPLEADO " );
    if($sueldo < 800){
        $aumento = $sueldo * 0.15;
    }
    echo "El sueldo sin  aumento:" . $sueldo . "\n";
    echo "Aumento : " . $aumento . "\n";
    echo "Total a pagar: " . ($sueldo + $aumento . "\n" );
}

?>
