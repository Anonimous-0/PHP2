<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Encuesta</title>
</head>

<body>
  <form action="total.php" method="post">
    <h2>Encuesta sobre satisfaccion del curso</h2>

    Nombre del encuestado:
    <input type="text" name="nombre" /><br /><br />

    <?php for ($i = 1; $i <= 10; $i++) { ?> Pregunta <?php echo $i; ?> (1 a 5):
      <input
        type="number"
        name="p
        
        <?php echo $i; ?>"
        min="1"
        max="5" /><br /><br />
    <?php } ?>

    <input type="submit" value="Enviar" />
  </form>
</body>

</html>