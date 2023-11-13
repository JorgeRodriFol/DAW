<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <svg width="1000" height="1000">
        <?php
        $size = $_GET["size"];
        $border = $_GET["border"];
        print "<rect width='$size' height='$size' style='fill:rgb(0,0,255);stroke-width:$border;stroke:rgb(0,0,0)' />";
        ?>
    </svg>
    <a href="cuadradoBordes.php">Volver a la pagina anterior</a>
</body>

</html>