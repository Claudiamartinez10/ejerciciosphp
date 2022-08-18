<?php

/*Leer como datos el modelo de un vehículo y su precio, determinar el valor final que debe pagar el comprador. El
concesionario está haciendo descuentos, teniendo en cuenta el modelo con base en la siguiente tabla: */



$modelo ="Toyota";
$precio = 25000;
$descuento = 0;
$total = 0;
$modelo = strtoupper($modelo);


if ($modelo == "VOLSKWAGEN"){
    $descuento = $precio * 0.08;
}else if($modelo == "TOYOTA"){
    $descuento = $precio * 0.09;
}else if($modelo == "HYUNDAI"){
    $descuento = $precio * 0.06;
}else if($modelo == "MAZDA"){
    $descuento = $precio * 0.05;
}else {
    echo "No aplicas en nuestra promocion de descuento <br>";
}

$total = $precio - $descuento;

//Salidas

echo  "MODELO DEL CARRO: " . $modelo . "<br>";
echo "PRECIO: " . $precio . "<br>";
echo  "DESCUENTO: " . $descuento . "<br>" ;
echo "TOTAL A PAGAR :"  . $total . "<br>";










?>