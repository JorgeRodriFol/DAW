<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LINEA</h1>
    <p>Actualice la pagina para mostrar un color diferente</p>
    <?php
        echo("<p>Color: $longitud<p>");
        echo("<svg width='400' height='100'> <circle cx='50' cy='50' r='40' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />   </svg>");
    ?>
</body>
</html>