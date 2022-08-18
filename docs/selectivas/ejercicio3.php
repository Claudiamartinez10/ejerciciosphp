<?php

/*En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. Si el paciente es operado
deberá además cancelar $1000 por los gastos más 20% del pago total por honorarios del doctor. Dados n días
que estuvo el paciente, escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos
hechos. */


$dias = 0;
$nombre = "";
$total = 0;
$op = "";
$doc = 0;
$pagot = 0;
if (isset($_POST['enviar'])) {
    $dias = floatval ($_POST['dias']);
    $nombre =  ($_POST['nombre']);
    $op =  ($_POST['op']);

    $pagot = 25 * $dias;
    if($op == "si"){
     $total = (25 *$dias) + 1000;
     $doc = ($total * 0.20);
     $pagot = $total + $doc;

    }

    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <div >
        EJERCICIO  3
    </div>
    <div class="container">
        <form method="POST" action="ejemplo3.php">
        <div class="form-group">
                <label for="">Ingrese su nombre:</label>
                <input type="text"  class="form-control" placeholder="ingrese su nombre..." name="nombre">
                
            </div>
            <div class="form-group">
                <label for="">Dias del paciente en el hospital:</label>
                <input type="number" class="form-control" placeholder="ingrese sus dias en este hospital.." name="dias">
            </div>
            <div class="form-group">
                <label for="">El paciente fue operado?</label>
          <select name="op" id="" class="form-control">
            <option value="seleccionar">seleccionar</option>
            <option value="si">si</option>
            <option value="no">no</option>
          </select>
            </div>

        

            <button type="submit" name="enviar" class="btn btn-outline-success">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-success">
                <th>Nombre</th>
                <th>Dias hospitalizados</th>
                <th>Hubo operacion</th>
                <th>honorarios del doctor</th>
                <th>Total a pagar</th>
            </tr>
            <tr>
                <td><?php echo $nombre?></td>
                <td> <?php echo $dias;?></td>
                <td> <?php echo $op;?></td>
                <td>$<?php echo number_format($doc,2)?></td>
                <td>$<?php echo number_format($pagot,2)?></td>
             
            </tr>
         </table>
        </div>
    </div>
</body>

</html>

