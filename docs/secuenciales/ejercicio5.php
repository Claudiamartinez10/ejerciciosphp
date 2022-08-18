<?php
/*Escribir un programa que convierta un valor dado en grados Fahrenheit a grados Celsius. Recordar que la
fórmula para la conversión es: C = (F-32) *5/9*/


$Fahrenheit = 0;
$celcius = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$Fahrenheit = floatval ($_POST["Fahrenheit"]);
 $celcius = ($Fahrenheit - 32) * 5/9;

$mensaje = "<div class='alert alert-success' role='alert'> Datos procesados </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>
</head>

<body>
    <div >
        EJEMPLO 5
    </div>
    <div class="container">
        <form method="POST" action="index5.php">
            <div class="form-group">
                <label for="">Grados Fahrenheit:</label>
                <input type="number" class="form-control" placeholder="ingrese los grados Fahrenheit.." step="0.1" name="Fahrenheit">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

                <h3>Grados Fahrenheit covertidos a Celcius: <?php echo $celcius; ?></h3>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>