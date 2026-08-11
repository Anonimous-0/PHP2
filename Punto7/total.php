<?php

$nom = $_POST["nombre"];

$sum = 0;

for ($i = 1; $i <= 10; $i++) {

    $sum += $_POST["p".$i];

}

$prom = $sum / 10;

echo "Resultado de la encuesta";

echo "Encuestado: " . $nom . "<br><br>";

echo "Promedio obtenido: " . $prom;