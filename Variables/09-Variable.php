<?php
$e = readline("Introduce el valor del producto: ");
$c = readline("Introduce la cantidad de productos que va a llevar: ");
$i = (($e*$c)*0.16);
$t = ($e*$c)+$i;
echo "el valor total a pagar es de {$t}";
?>