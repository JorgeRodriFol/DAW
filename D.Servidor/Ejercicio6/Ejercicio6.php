<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Codigo de colores</h1>
    <p>Actualice la pagina para mostrar un nuevo valor</p>
    <p>
        <?php
            echo("rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255).")");
        ?>
    </p>
</body>
</html>