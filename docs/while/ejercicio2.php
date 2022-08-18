<?php

/*En un supermercado una señora pone en su carrito los artículos que va tomando de los estantes. La señora
quiere asegurarse de que el cajero le cobre bien lo que ella ha comprado, por lo que cada vez que toma un
artículo anota su precio junto con la cantidad de artículos iguales que ha tomado y determina cuánto dinero
gastará en ese artículo; a esto le suma lo que irá gastando en los demás artículos, hasta que decide que ya tomó
todo lo que necesitaba. Ayúdale a esta señora a obtener el total de sus compras.*/ 


$venta1 = 0;
$venta2 = 0;
$ven1 = 0;
$ven2 = 0;
$opcion = " si";
$i = 0;
$total = 0;
while($opcion == " si"){
$venta1 = readline("Ingrese las compras " . ($i + 1));
$venta2 = readline("Ingrese las otras  compras");
$opcion = readline("Comprara mas");
$ven1 = $ven1 + $venta1;
$ven2 = $ven2 + $venta2;
$i++;
}
$total = $ven1 + $ven2;
echo "EL TOTAL DE COMPRAS DEL MISMO PRECIO ES:" . "\n";
echo number_format($ven1,2) . "\n"; 
echo "El total de las demas compras es:" . "\n";
echo number_format($ven2,2) . "\n"; 
echo "El total de compras es:" . "\n";
echo number_format($total,2) . "\n"; 
?> 

