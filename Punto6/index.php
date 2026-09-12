<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Tabla de multiplicar</h1>
</head>

<body>
    <form action="" method="post">
        <label for="num">Digita un número:</label><br><br>
        <input type="number" id="num" name="num" placeholder="Digite un número"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
echo "<br>";
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    echo "Tabla del $num con FOR <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    }

    echo "<br>Tabla del $num con WHILE <br>";
    $i = 1;
    while ($i <= 10) {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
        $i++;
    }
}
?>