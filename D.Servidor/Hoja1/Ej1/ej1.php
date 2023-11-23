<!-- Escriba un programa que cada vez que se ejecute muestre una línea de longitud entre 10 y 1000 píxeles, al azar.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LINEA</h1>
    <p>Actualice la pagina para cambiar la longitud de la linea.</p>
    <?php
    $longitud = rand(10, 100);

    echo "<p>La longitud de la linea es de $longitud px.</p>";

    echo "<svg width='110' heigth='100'>
            <rect width='$longitud' height='5' style='fill:rgb(0,0,0)' />
        </svg>";
    ?>
</body>

</html>