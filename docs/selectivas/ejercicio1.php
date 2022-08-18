<?php
/*Dado como dato el sueldo de un trabajador, aplique un aumento del 15% si su sueldo es mayor o igual a $550.
Imprimir en ese caso el nuevo sueldo del trabajador.*/

$sueldo = 0;
$aumento = 0;


for ($i = 0;  $i < 5; $i++) {
    $aumento = 0;
    $sueldo = readline(" ESCRIBA EL PRIMER SUELDO DEL EMPLEADO: " );
    if($sueldo >= 550){
        $aumento = $sueldo * 0.15;
    }
    echo "El sueldo sin  aumento $ :" . $sueldo;
    echo "Aumento $ : " . $aumento;
    echo "Total a pagar $: " . ($sueldo + $aumento );
}

?>
