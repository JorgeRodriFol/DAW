<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $posicion = rand(1,6);
        echo("<img src='dado$posicion.jpeg' alt='$posicion'><br><br>");
        echo("<img src='ficha$posicion.png' alt='$posicion'><br><br>");
    ?>
</body>
</html>