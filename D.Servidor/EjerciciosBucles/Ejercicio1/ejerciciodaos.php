<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $par = 0;
        $impar = 0;
        for ($i = 0; $i < 10; $i++) {
            $tirada = rand(1,6);
            echo("<img src='../Dado$tirada.png' >");
            $suma += $tirada;
        }
        echo("<p>Total: $suma</p>");
    ?>
</body>
</html>