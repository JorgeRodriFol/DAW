<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = $_POST['name'];
    print "<p>Nombre: <strong>" . $nombre . "</strong></p>";
    ?>
    <a href="nombre.php">Volver a la pagina anterior</a>
</body>

</html>