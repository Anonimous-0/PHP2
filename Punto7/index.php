<?php

if (isset($_POST["encuestados"])) {

    $enc = (int) $_POST["encuestados"];

    $preg = [
        "¿Usa las redes sociales de forma responsable?",
        "¿Las redes sociales le ayudan a mantenerte informado?",
        "¿Pasa demasiado tiempo en redes sociales?",
        "¿Las redes sociales afectan su rendimiento académico?",
        "¿Se siente cómodo compartiendo contenido personal en redes sociales?",
        "¿Confía en la información que ve en redes sociales?",
        "¿Las redes sociales mejoran su comunicación con otras personas?",
        "¿Podría dejar de usar redes sociales sin dificultad?",
        "¿Las redes sociales influyen en sus decisiones de compra?",
        "¿En general, está satisfecho con el uso que le da a las redes sociales?"
    ];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta - Preguntas</title>
</head>

<body>
    <h2>Encuesta sobre uso de redes sociales</h2>
    <p>Total de encuestados: <?php echo $enc; ?></p>
    <p>Califica cada afirmación del 1 (muy en desacuerdo) al 5 (muy de acuerdo).</p>

    <form action="total.php" method="POST">

        <?php for ($i = 1; $i <= $enc; $i++): ?>
            Encuestado #<?php echo $i; ?>
            <br>
            <?php foreach ($preg as $num => $texto): ?>
                <?php echo ($num + 1) . ". " . $texto; ?>
                <input type="number" name="calificaciones[]" min="1" max="5" required>
                <br>
            <?php endforeach; ?>
            <br>
        <?php endfor; ?>

        <input type="submit" value="Enviar encuesta">
    </form>

</body>

</html>
<?php

} else {

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta - Uso de Redes Sociales</title>
</head>

<body>
    <h2>Encuesta sobre uso de redes sociales</h2>

    <form action="index.php" method="POST">
        <label for="encuestados">¿Cuántas personas van a responder la encuesta?</label>
        <input type="number" id="encuestados" name="encuestados" min="1" required>
        <br><br>
        <input type="submit" value="Generar encuesta">
    </form>
</body>

</html>
<?php
}
?>