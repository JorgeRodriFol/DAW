<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ej7result.php" method="post">
        <?php
        $numValores = $_POST['numvalores'];

        for ($i = 0; $i < $numValores; $i++) {
            echo '<label>Número ' . $i . ':</label>
        <input type="number" name="num[]" id="' . $i . '"><br>';
        }

        echo '<input type="hidden" name="funcion" value="' . $_POST["funcion"] . '">';
        ?>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>