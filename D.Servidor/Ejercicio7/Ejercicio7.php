<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saludo</h1>
    <p>Actualiza la pagina para cambiar el tamaño del saludo</p>
    <?php
        echo("<p style=font-size:".rand(200,800)."%>Hola</p>")
    ?>
</body>
</html>