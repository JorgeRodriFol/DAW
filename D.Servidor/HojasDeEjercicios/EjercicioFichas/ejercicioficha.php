<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO DE LA FICHA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>EJERCICIO DE LA FICHA</h1>
    <div>
        <p>Actualiza la página para volver a tirar el dado y ver donde cae la ficha</p>
        <?php
            $posicion = rand(1,6);
            echo("<img src='dado$posicion.jpeg' alt='$posicion'><br><br>");
            echo("<img src='ficha$posicion.png' alt='$posicion'><br><br>");
        ?>
    </div>
</body>
</html>