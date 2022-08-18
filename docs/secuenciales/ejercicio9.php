<?php
// Un alumno desea saber cuálserá su calificación final en la materia de lógica de programación. Dicha calificación se compone de los siguientes porcentajes:
// 55% del promedio de sus tres calificaciones parciales. 30% de la calificación del examen final. 15% de la calificación de un trabajo fina

$par1 = 9;
$par2 = 7;
$par3 = 8;
$final = 6;
$trabajo = 9;
$parcialf = ($par1+$par2+$par3)/3;
$parcialf1 = $parcialf*0.55;
$finalt = $final*0.30;
$trabajof = $trabajo*0.15;
$notaf = $parcialf1+$trabajof+$finalt;

echo "PORCENTAJE DE LOS PARCIALES: " . $parcialf1."<br>";
echo "PORCENTAJE DEL EXAMEN FINAL: " . $finalt ."<br>";
echo "PORCENTAJE DEL TRABAJO FINAL: " . $trabajof."<br>";
echo "NOTA FINAL: " . $notaf."<br>";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>PORCENTAJE DE LOS PARCIALES</th>
            <th><?php echo $parcialf1 ?></th>
        </tr>
        <tr>
            <td>PORCENTAJE DEL EXAMEN FINAL</td>
            <td><?php echo $finalt ?></td>
        </tr>
        <tr>
            <td>PORCENTAJE DEL TRABAJO FINAL:</td>
            <td><?php echo $trabajof ?></td>
        </tr>
        <tr>
            <td>NOTA FINAL:</td>
            <td><?php echo $notaf ?></td>
        </tr>
    </table>
</body>
</html>