<?php

/*En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes.*/ 



$subtotal = 0;
$descuento = 0;
$descuento2 = 0;
$totalapagar = 0;
$acumtotal = 0;
do {
    $descuento = 0;
    $descuento2 = 0;
    echo "BIENVENIDO! \n";
    echo "1. Cuaderno \n";
    echo "2. Revista \n";
    echo "3. Libros \n";
    $opc = readline("SELECCIONE UNA OPCIÓN: ");
    $cantidad = readline("CANTIDAD PRODUCTO: ");
    $precio = readline("PRECIO PRODUCTO: ");
    $tipopago = readline("TIPO DE PAGO: CONTADO/CREDITO : ");
    $subtotal = $cantidad * $precio;

    $tipopago = strtoupper($tipopago);
    if ($tipopago == "CONTADO") {
        $descuento2 = $subtotal * 0.06;
    }
    switch ($opc) {
        case "1":
            $descuento = $subtotal * 0.1;
            break;
        case "2":
            $descuento = $subtotal * 0.16;
            break;
        case "3":
            $descuento = $subtotal * 0.22;
            break;

        default:
            echo "Opción Incorrecta";
            break;
    }

    $totalapagar = $subtotal - $descuento - $descuento2;
    $acumtotal += $totalapagar;
    echo "TOTAL A PAGAR: $ " . $totalapagar . "\n";
    $pregunta = readline("DESEA INGRESAR OTRO CLIENTE? SI/NO : ");
    $pregunta = strtoupper($pregunta);
} while ($pregunta == "SI");

echo "TOTAL COMPRAS POR TODOS LOS CLIENTES: " . $acumtotal;
?>