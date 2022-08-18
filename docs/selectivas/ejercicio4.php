<?php

/*En un supermercado se hace una promoción mediante la cual el cliente obtiene un descuento dependiendo de
un número que escoge al azar. Si el número escogido es menor a 74 el descuento es del 15% sobre el total de la
compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final.*/ 


$compra = 0;
$numero = 0;
$nombre = "";
$descu = 0;
$total = 0;
$mensaje = "";
if (isset($_POST['enviar'])) {
    $compra = floatval ($_POST['compra']);
    $nombre =  ($_POST['nombre']);
    $numero = floatval ($_POST['numero']);
if ($numero < 74){
$descu = $compra * 0.15;
$mensaje = "<div class= role='alert'> 15%</div>";
}else if ($numero >= 74){
   $descu = $compra * 0.20;
   $mensaje = "<div class= role='alert'> 20%</div>";
}
    $total = $compra - $descu;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>

<body>
    <div>
        EJERCICIO 4
    </div>
    <div class="container">
        <form method="POST" action="ejemplo4.php">
        <div class="form-group">
                <label for="">Nombre del Cliente:</label>
                <input type="text" class="form-control" placeholder="ingrese su Nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Ingrese su compra:</label>
                <input type="number" class="form-control" placeholder="ingrese su compra" name="compra">
            </div>
        <div class="form-group">
                <label for="">Seleccione un numero:</label>
                <input type="number"  class="form-control" placeholder="Seleccione un numero..." name="numero">
                
            </div>
            <button type="submit" name="enviar" class="btn btn-danger">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-primary">
                <th>Nombre</th>
                <th>Su compra</th>
                <th>Descuento</th>
                <th>porcentaje de descuento</th>
                <th>total a pagar</th>
            </tr>
            <tr>
                <td><?php echo $nombre?></td>
                <td>$ <?php echo number_format($compra,2)?></td>
                <td>$ <?php echo number_format($descu,2)?></td>
                <td><?php echo $mensaje?></td>
                <td>$<?php echo number_format($total,2)?></td>
             
            </tr>
         </table>
        </div>
    </div>
</body>

</html>
