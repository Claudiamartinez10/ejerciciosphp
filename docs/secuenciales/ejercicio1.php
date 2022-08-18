<?php 
/*Escribir un programa que pregunte al usuario su nombre, apellido, DUI, edad, teléfono y dirección, y que lo
muestre en pantalla.*/


$nombre = "";
$apellido ="";
$dui = "";
$edad = 0;
$telefono = "";
$direccion = "";
$mensaje = "";

if (isset($_POST['enviar'])) {
    $nombre =  ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $dui = ($_POST['dui']);
    $edad = floatval ($_POST['edad']);
    $telefono =  ($_POST['telefono']);
    $direccion =  ($_POST['direccion']);
    
     $mensaje = "<div class='alert alert-danger' role='alert'> Datos procesados </div>";
    
    
    
    }

?>