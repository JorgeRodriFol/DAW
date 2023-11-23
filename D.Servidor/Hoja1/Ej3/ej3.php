<!--Escriba un programa que cada vez que se ejecute muestre dos tiradas de dados entre 1 y 6, al azar, e indique el resultado total.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TIRADA DE DADOS</h1>
    <p>Recarga la pagina para realizar otra tirada.</p>
    <?php
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    echo "<img src='../../Dados/dado$dado1.png' alt='$dado1'>";
    echo "<img src='../../Dados/dado$dado2.png' alt='$dado2'>";

    echo "<p>Total: " . ($dado1 + $dado2) . "</p>";
    ?>
</body>

</html>