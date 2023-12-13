<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $datos = $_POST['num'];
    $operacion = $_POST['funcion'];

    if ($operacion == "minimo") {
        echo '<h1>' . min($datos) . '</h1>';
    } else if ($operacion == "maximo") {
        echo '<h1>' . max($datos) . '</h1>';
    } else if ($operacion == "suma") {
        echo '<h1>' . array_sum($datos) . '</h1>';
    } else {
        echo '<h1>' . (array_sum($datos) / count($datos)) . '</h1>';
    }
    ?>
</body>

</html>