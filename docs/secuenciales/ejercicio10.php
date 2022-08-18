<?php
/*Se pide crear un programa que calcule el porcentaje de alumnos y alumnas de un salón de clase*/
$mensaje = "";
$n1 = 0;
$n2 = 0;
$niños = 0;
$niñas = 0;
 if (isset($_POST['enviar'])) {
$n1 = floatval ($_POST["n1"]);
$n2 = floatval ($_POST["n2"]);
$niñas = ($n1 /100) * 100;
$niños = ($n2 /100) * 100;

$mensaje = "<div class='alert alert-danger' role='alert'> Datos procesados </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 10</title>
</head>

<body>
    <div>
        EJERCICIO  10
    </div>
    <div class="container">
        <form method="POST" action="index10.php">
            <div class="form-group">
                <label for="">Total niños:</label>
                <input type="number" class="form-control" placeholder="ingrese....." step="0.1" name="n1">
            </div>
            <div class="form-group">
                <label for="">Total niñas:</label>
                <input type="number" class="form-control" placeholder="ingrese...." step="0.1" name="n2">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

               <table class = "table table-hover ">
                <tr class="btn-danger">
                <th>Porcentaje de niñas</th>
                <th>Porcentaje de niños</th>

                </tr>
                <tr>
                    <td><?php echo $niñas?>%</td>
                    <td><?php echo $niños; ?>%</td>

                </tr>
               </table>

        </div>
        <?php echo $mensaje; ?>

    </div>
</body>

</html> 