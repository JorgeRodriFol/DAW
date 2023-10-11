<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $primerDado = rand(1,6);
        $segundoDado = rand(1,6);

        echo("<img src='Dado$primerDado.png' >");
        echo("<img src='Dado$segundoDado.png'><br>");

        if($primerDado == $segundoDado){
            echo("<p>Salio pareja de $primerDado</p>");
        }else if($primerDado < $segundoDado){
            echo("<p>No salio pareja, el resultado mas alto es $segundoDado</p>");
        }else{
            echo("<p>No salio pareja, el resultado mas alto es $primerDado</p>");
        }
    ?>
</body>
</html>