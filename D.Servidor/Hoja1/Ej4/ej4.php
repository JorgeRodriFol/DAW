<!--Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10, al
azar, e indique el valor más alto.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LA CARTA MAS ALTA</h1>
    <p>Actualice la página para mostrar un nuevo trio de cartas.</p>

    <?php
    $carta1 = rand(1, 10);
    $carta2 = rand(1, 10);
    $carta3 = rand(1, 10);

    echo "<img src='../../Cartas/carta$carta1.png' alt='$carta1'>";
    echo "<img src='../../Cartas/carta$carta2.png' alt='$carta2'>";
    echo "<img src='../../Cartas/carta$carta3.png' alt='$carta3'>";

    if ($carta1 > $carta2 && $carta1 > $carta3) {
        echo "<p>La carta mas alta es el $carta1</p>";
    } else if ($carta2 > $carta1 && $carta2 > $carta3) {
        echo "<p>La carta mas alta es el $carta2</p>";
    } else if ($carta3 > $carta1 && $carta3 > $carta2) {
        echo "<p>La carta mas alta es el $carta3</p>";
    } else {
        echo "<p>Hubo un empate</p>";
    }
    ?>
</body>

</html>