<?php

/*Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá
pagar finalmente por su compra.*/


$num1 = 0;
$descuento = 0;
$mensaje = "";
$compra = 0;
 if (isset($_POST['enviar'])) {
$n1 = floatval ($_POST["n1"]);
$descuento = $num1 * 0.15;
$compra = $num1 - $descuento;
$mensaje = "<div class='alert alert-success' role='alert'> Tiene un 15% de descuento </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 8</title>
</head>

<body>
    <div >
        EJEMPLO 8
    </div>
    <div class="container">
        <form method="POST" action="index8.php">
            <div class="form-group">
                <label for="">Total de la compra:</label>
                <input type="number" class="form-control" placeholder="ingrese su compra.." step="0.1" name="num1">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

               <table class = "table table-hover ">
                <tr class="btn-danger">
                <th>Compra</th>
                <th>Descuento 15%</th>
                <th>Total a pagar</th>
                </tr>
                <tr>
                    <td>$<?php echo number_format($num1,2); ?></td>
                    <td>$<?php echo number_format($descuento,2); ?></td>
                    <td>$<?php echo number_format($compra,2); ?></td>
                </tr>
               </table>

        </div>
        <?php echo $mensaje; ?>

    </div>
</body>

</html>