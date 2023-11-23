<!--Escriba un programa que cada vez que se ejecute muestre un círculo de 50px de radio y de un color elegido al azar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CÍRCULO DE COLOR</h1>
    <p>Recarga la pagina para cambiar el color del circulo</p>
    <?php
    echo "<svg whidth='110' heigth='110'>
            <circle cx='50' cy='50' r='50' fill='rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")'>
        </svg>";
    ?>
</body>

</html>