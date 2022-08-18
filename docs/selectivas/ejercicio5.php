<?php
//Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:Si trabaja 40 horas o menos se le paga $4 por hora.Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.Calcule el nuevo salario del obrero.

$pagoNormal = 0;
$horaextra = 0;
$horas = 46;
$pagoextra = 0;
$totalpago = 0;


if ($horas <=40 ) {
    $pagoNormal = $horas * 4;
}else   {
    $pagoNormal = 40 * 4;
    $horaextra = $horas - 40;
    $pagoextra = $horaextra * 6;
}
$totalpago = $pagoNormal + $pagoextra;

echo "CANTIDAD DE HORAS: " . $horas . "<br>";
echo "HORAS EXTRAS: " . $horaextra . "<br>";
echo "PAGO NORMAL DE LAS PRIMERAS 40 HORAS: " . $pagoNormal .  "<br>";
echo "TOTAL A PAGAR : " . $totalpago ."<br>";


?>