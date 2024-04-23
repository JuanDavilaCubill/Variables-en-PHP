<?php
$sd = readline ("ingresa el salario diario: ");
$dt = readline ("ingresa la cantidad de dias trabajados: ");
$st = ($sd*$dt)*0.15;
$sr = ($sd*$dt)*0.10;
$to = ($sd*$dt)-$sr-$st;
echo "el suedo a pagar es {$to}";
?>