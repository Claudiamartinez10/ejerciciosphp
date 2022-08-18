<?php

/*En una tienda de descuento, las personas que van a pagar el importe de su compra llegan a la caja y sacan una
olita de color, que les dirá qué descuento tendrán sobre el total de su compra. Determinar la cantidad que
pagará cada cliente desde que la tienda abre hasta que cierra. Se sabe que, si el color de la bolita es roja, el
cliente tendrá un 40% de descuento; si es amarilla, un 25% y si es blanca no tendrá descuento.*/ 
$venta = 0;
$opcion = 0;
$descuen1 = 0;
$dest1 = 0;
$a = " si";
$b = 0;
$ventadeldia = 0;
$totaldes1 = 0;
$descuen2 = 0;
$dest2 = 0;
$ventadia = 0;
$totaldes2 = 0;
$ventassin = 0;
$ventas1 = 0;
$totaldes = 0;
$ventat = 0;
while($a == " si"){
$venta = readline("Ingrese su compra ". ($b + 1));
echo "1- rojo" . "\n";
echo "2- amarillo" . "\n";
echo "3- blanco" . "\n";
$opcion = readline("Seleccione un color");
switch ($opcion) {
    case 1:
        $descuen1 = ($venta * 0.40);
        $dest1 = $venta - $descuen1;
        echo "FELICIDADES SU DESCUENTOS ES DEL 40% SU NUEVO TOTAL A PAGAR ES: $" . $dest1 . "\n";
        $ventadeldia = $ventadeldia + $dest1;
        $totaldes1 = $totaldes1 + $descuen1;
        break;
        case 2:
            $descuen2 = ($venta * 0.25);
            $dest2 = $venta - $descuen2;
           echo "FELICIDADES SU DESCUENTO ES DEL 25% SU NUEVO TOTAL A PAGAR ES: $" . $dest2 . "\n";
            $ventadia = $ventadia + $dest2;
            $totaldescuen2 = $totaldes2 + $descuen2;
            break;
            case 3:
               echo "LO SENTIMOS ESE COLOR NO TIENE NINGUN DESCUENTO" . "\n";
                $ventassin = $ventassin + $venta;
                break;

    default:
    echo "LA OPNCION NO EXISTE";
        break;
}
$a = readline("Hay un nuevo cliente?");
$ventas1 = $ventas1 + $venta;
$b++;
}
$totaldes = $totaldes1 + $totaldes2;
$ventat = $ventadeldia + $ventadia;
echo "LOS DESCUENTOS APLICADOS EN EL DIA FUERON: $" . $totaldes . "\n";
echo "LAS VENTAS CON LOS DESCUENTOS APLICADOS ESTE DIA FUE: $" . $ventat . "\n";
echo "EL TOTAL DE VENTAS SIN DESCUENTO FUE: $" . $ventassin;
?> 

