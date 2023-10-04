<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LINEA</h1>
    <p>Actualice la pagina para mostrar una nueva linea</p>
    <?php
        $longitud = rand(10,1000);
        echo("<p>Longitud: $longitud<p>");
        echo("<svg width='400' height='100'> <rect width='$longitud' height='5' style='fill:rgb(0,0,0);' />   </svg>");
    ?>
</body>
</html>