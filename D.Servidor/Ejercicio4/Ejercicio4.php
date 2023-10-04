<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dado digital</h1>
    <p>Actualice la pagina para rolear de nuevo el dado</p>
    <div>
        <h1>
            <?php
                $resultado = rand(1,6);
                echo($resultado);
            ?>
        </h1>
    </div>
</body>
</html>