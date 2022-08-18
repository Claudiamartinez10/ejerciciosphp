<?php
/*Declaracion de variables */
$colorBolita = "";
$colorBolita= strtolower ($colorBolita);
$descuento = 0;
$valorCompra = 0;
$totalpago = 0;

if(isset($_POST["procesar"])){
    //Recibir los datos que vienen del formulario
    $valorCompra = $_POST["compra"];
    $colorBolita = $_POST["colorBolita"];
    $colorBolita = strtolower($colorBolita);

/*Procesos y condiciones */
if($colorBolita == "blanca"){
    $descuento = $valorCompra * 0;
} else if ($colorBolita == "verde"){
    $descuento = $valorCompra * 0.10;
}else if ($colorBolita == "amarilla"){
    $descuento = $valorCompra * 0.25;
}else if($colorBolita == "azul"){
    $descuento = $valorCompra * 0.50;
}else if($colorBolita == "roja"){
    $descuento = $valorCompra * 1;
} else {
    echo "Color de la bolita ingresada no tiene descuento";
}
$totalpago = $valorCompra - $descuento;
/*Salidas */
/* echo "COLOR DE LA BOLITA SELECCIONADA :" . $colorBolita . "<br>";
echo "TOTAL DE LA COMPRA SIN DESCUENTO:" . $valorCompra . "<br>";
echo "DESCUENTO :" . $descuento . "<br>";
echo "TOTAL A PAGAR :" . $totalpago . "<br>";  */
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO DE DESCUENTOS DE LAS BOLITAS DE COLORES </title>
</head> 
 <body>
    <form  action = "ejercicio6.php" method ="POST">
        <label for="">VALOR DE LA COMPRA: </label>
        <input  type="text"  required name="compra" placeholder="0.0"><br>

        <label for="">ELIJA UN COLOR DE DE LISTA: </label>
        <select name="colorBolita" required>
            <option value="">Seleccione</option>
            <option value="blanca">Blanca </option>
            <option value="verde">Verde</option>
            <option value="amarilla">Amarilla</option>
            <option value="azul">Azul</option>
            <option value="roja">Roja</option>
        </select>
        <br>
        <button type= "submit" name="procesar">PROCESAR DATOS</button>

    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>COLOR DE LA BOLITA</th>
                <th>TOTAL COMPRA SIN DESCUENTO</th>
                <th>DESCUENTO</th>
                <th>TOTAL A PAGAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $colorBolita ?></th>
                <th><?php echo $valorCompra ?></th>
                <th><?php echo $descuento ?></th>
                <th><?php echo $totalpago ?></th>
            </tr>
        </tbody>
    </table>


  </body>
</html>
