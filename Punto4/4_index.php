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
        <input type="text" id="nom" name="nom" placeholder="Digite nombre"><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>

<?php

if (isset($_POST["nom"])) {
    $nom = $_POST["nom"];
    if ($nom == 'Fabio Lancheros'){
        echo "Bienvenido Profesor " . $nom;
    } else {
        echo "Bienvenido " .$nom;
    }
}
?>