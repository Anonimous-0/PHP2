<?php

echo "Tabla del 4 con FOR";

echo "<br>";

for ($i = 0; $i <= 10; $i += 2) {

    echo "4 x " . $i . " = " . (4 * $i) . "<br>";

}

echo "<br>";

echo "Tabla del 4 con WHILE";

echo "<br>";

$i = 0;

while ($i <= 10) {

    echo "4 x " . $i . " = " . (4 * $i) . "<br>";

    $i += 2;
}