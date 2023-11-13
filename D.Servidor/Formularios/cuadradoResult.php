<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <svg width="100000000000000000000" height="100000000000000000000">
        <?php
        $size = $_GET["size"];
        print "<rect width='$size' height='$size' style='fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)' />";
        ?>
    </svg>
    <a href="cuadrado.php">Volver a la pagina anterior</a>
</body>

</html>