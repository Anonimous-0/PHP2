<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <form action="4_index.php" method="POST">
    <label for="nom">Nombre:</label>
    <input type="text" name="a" placeholder="Digite nombre"><br><br>
    <input type="button" value="Ingresar">
    </form>
</body>
</html>

<?php

$nom = $_POST["a"];

echo "Buenas noches profesor $nom";

