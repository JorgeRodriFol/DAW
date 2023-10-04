<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saludo</h1>
    <p>Actualiza la pagina para cambiar el emoji</p>
    <?php
        echo("<p style='font-size:100px'>&#".rand(128512, 128586).";</p>")
    ?>
</body>
</html>