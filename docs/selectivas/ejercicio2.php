<?php
/*Dado el sueldo de un empleado, encontrar el nuevo sueldo si obtiene un aumento del 10% si su sueldo es
inferior a $600, en caso contrario no tendrá aumento*/

$sueldo = 0;
$aumento = 0;


for ($i = 0;  $i < 5; $i++) {
    $aumento = 0;
    $sueldo = readline("ESCRIBA EL PRIMER SUELDO DEL EMPLEADO " );
    if($sueldo < 600){
        $aumento = $sueldo * 0.10;
    }
    echo "El sueldo sin  aumento:" . $sueldo ;
    echo "Aumento : " . $aumento;
    echo "Total a pagar: " . ($sueldo + $aumento );
}

?>
