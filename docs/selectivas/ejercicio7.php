<?php

/*Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura, número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento segúnla siguiente tabla:*/

//Declaraciones o asignacion de datos

$nombreVendedor  = "";
$nombreCliente = "";
$fechaFactura = "";
$numeroFactura = "";
$ventas = 0 ;
$descuento = 0;
$totalPago = 0;

$etiqueta = "";
if (isset ($_POST ['enviar'])){
//Procedimientos y condiciones
$nombreVendedor = $_POST["nombrev"];
$nombreCliente = $_POST["nombrec"];
$numeroFactura = $_POST ["numerof"];
$fechaFactura = $_POST ["fecha"];
$ventas = $_POST ["ventas"];




echo "Ventas Obtenidas: " . $ventas . "<br>";

if ($ventas < 0 && $ventas < 100) {
   $descuento = $ventas * 0.0;
}else if ($ventas <= 100 && $ventas <= 500){
     $descuento = $ventas * 0.15;
}else if ($ventas < 50 && $ventas <=1000) {
     $descuento = $ventas * 0.20;
}else if ($ventas > 1000 )  {
    $descuento = $ventas * 0.30;
}else {
    echo "No aplica a nuestras promociones de descuento ";
}


$totalPago = $ventas - $descuento;
}



//Salidas
echo "Nombre Vendedor: " . $nombreVendedor . "<br>";
echo "Nombre Cliente: " . $nombreCliente . "<br>";
echo "Fecha Facturacion : " . $fechaFactura . "<br>";
echo "Numero de Factura: " . $numeroFactura . "<br>";
echo "Ventas: " . $ventas . "<br>";
echo "Descuento: " . $descuento . "<br>";
echo "<strong>TOTAL A PAGAR: $ " . $totalPago . "</strong><br>";


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO DE FACTURA
    </div>
    <div class="container">
        <form method="POST" action="ejercicio7.php">
            <div class="form-group">
                <label for="">NOMBRE DEL VENDEDOR </label>
                <input type="text" class="form-control" placeholder="Escribe el nombre del vendedor  " name="nombrev" required>
            </div>
            <div class="form-group">
                <label for="">NOMBRE DEL CLIENTE </label>
                <input type="text" class="form-control" placeholder="Escribe el nombre del cliente  " name="nombrec" required>
            </div>
            <div class="form-group">
                <label for="">NUMERO DE LA FACTURA </label>
                <input type="text" class="form-control" placeholder="0000-000 " name="numerof" required>
            </div>
            <div class="form-group">
                <label for="">FECHA DE FACTURACION </label>
                <input type="text" class="form-control"  name="fecha" value="<?php echo date('Y/m/d') ?>" required>
            </div>
            <div class="form-group">
                <label for="">COMPRAS REALIZADAS</label>
                <input type="number" class="form-control" placeholder="0.00  " name="ventas" required>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">CALCULAR</button>

             </form>
        <br>
        <table class="table table-hover table-bordered">
            <thead class="btn-primary">
                <tr>
                    <th>NOMBRE DEL VENDEDOR </th>
                    <th>NOMBRE DEL CLIENTE</th>
                    <th>NUMERO DE FACTURA</th>
                    <th>FECHA DE FACTURA</th>
                    <th>COMPRA</th>
                    <th>DESCUENTO</th>
                    <th>TOTAL PAGO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nombreVendedor ?> </td>
                    <td><?php echo $nombreCliente ?></td>
                    <td><?php echo $numeroFactura?></td>
                    <td><?php echo $fechaFactura?></td>
                    <td><?php echo number_format ($ventas, 2)?></td>
                    <td><?php echo number_format ($descuento, 2)?><span class="badge badge-success"><?php echo $etiqueta?></span></td>
                    <td><?php echo number_format ($totalPago, 2)?></td>


                </tr>
                </tbody>
        </table>
        </body>
        </html>
