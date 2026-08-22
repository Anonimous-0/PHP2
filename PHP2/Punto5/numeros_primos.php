<?php

$num = $_POST["numP"];

echo "Numero digitado: " . $num . "<br><br>";

$contador = 0;

for ($i = 2; $i <= $num; $i++) {

    $Primo = true;

    for ($j = 2; $j < $i; $j++) {

        if ($i % $j == 0) {
            $Primo = false;
            break;
        }

    }

    if ($Primo) {
        echo $i . " es primo <br>";
        $contador++;
    }

}
echo "Total de numeros primos: " . $contador;