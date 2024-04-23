<?php
$velocidad = readline("Introduce la velocidad en kilometros por hora: ");
$tiempo = readline("Introduce el tiempo en horas: ");
$mvr = $velocidad * $tiempo;
echo  "el resultado es: {$mvr} km";
?>