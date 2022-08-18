<?php 
//Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:a.Si el sueldo es menor a $1000: aumento 12%b.Si el sueldo está comprendido entre $1000 y $25000: aumento 10%c.Si el sueldo es mayor a $25000: aumento 8%d.Imprimael nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento.

$sueldo = 0;
$aumento = 0;

for ($i = 0; $i < 3; $i++){
    $aumento = 0;
    $sueldo = readline("ESCRIBA EL SUELDO BASE:$ ");
    if ($sueldo < 1000) {
        $aumento = $sueldo * 0.12;
    } else if ($sueldo >=1000 && $sueldo<=2500) {
        $aumento = $sueldo * 0.10;
    }else if ($sueldo >2500) {
        $aumento = $sueldo * 0.08;
} 
echo "Sueldo base: $" . $sueldo . "\n"; 
echo "Aumento: $" . $aumento . "\n"; 
echo "Total  a pagar: $" . ($sueldo + $aumento); 
}

?>