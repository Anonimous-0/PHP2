<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultados de la Encuesta</title>
</head>

<body>

<?php

if (isset($_POST["calificaciones"])) {

    $calf = $_POST["calificaciones"];

    $totalresp = count($calf);

    $sum = 0;

    foreach ($calf as $val) {
        $sum += (int) $val;
    }

    $prom = $sum / $totalresp;

    echo "<h2>Resultados de la encuesta</h2>";
    echo "<p>Total de calificaciones registradas: $totalresp</p>";
    echo "<p>Suma de todas las calificaciones: $sum</p>";
    echo "<p>Promedio general de satisfacción (escala 1-5): " . round($prom, 2) . "</p>";

} else {
    echo "<p>No se recibieron datos de la encuesta.</p>";
}

?>

<br>
<a href="index.php">Volver al inicio</a>

</body>

</html>