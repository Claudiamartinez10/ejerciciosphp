<?php

/*Dado el peso, la altura y el sexo de 50 personas que pertenecen a Sonsonate, obtenga el promedio del peso y
de la altura de esta población*/ 

$peso = 0;
$altura = 0;
$prom1 = 0;
$prom2 = 0;
$peso1 = 0;
$peso2 = 0;
$pn1 = 0;
$pn2 = 0;
$kg = "kg";
$m ="cm";


for ($i=0; $i < 5; $i++) { 
    $altura = readline("Ingrese su altura en cm " . ($i + 1));
    $peso = readline("Ingrese su peso en kg");
    $prom2 = $prom2 + $altura;
    $prom1 = $prom1 + $peso;


}

$prom2 = $prmo2 / $i;
$prom1 = $prom1 / $i;

echo "Su promedio de altura es: " .$peso2 . $m .  "\n";
echo "Su promedio de peso es : " . $peso1 .$kg .  "\n";
?>