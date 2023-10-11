<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Juego Del Dado</h1>
    <p>Actualiza la pagina para un nuevo juego</p>
    <div class="juego">
        <div class="jugadores">
            <div class="jugador1">
                <p>jugador 1</p>
                <?php
                    $primerDadoJ1 = rand(1,6);
                    $segundoDadoJ1 = rand(1,6);
                    echo("<img src='../Dado$primerDadoJ1.png' >");
                    echo("<img src='../Dado$segundoDadoJ1.png' >");
                    ?>
            </div>
            <div class="jugador2">
                <p style="color:white">jugador 2</p>
                <?php
                    $primerDadoJ2 = rand(1,6);
                    $segundoDadoJ2 = rand(1,6);
                    echo("<img src='../Dado$primerDadoJ2.png' >");
                    echo("<img src='../Dado$segundoDadoJ2.png' >");
                    ?>
            </div>
        </div>
        <div class="resultado">
            <p>Resultado</p>
            <?php
                $parejaJ1;
                if($primerDadoJ1 == $segundoDadoJ1){
                    $parejaJ1 = true;
                }else{
                    $parejaJ1 = false;
                }

                if($primerDadoJ2 == $segundoDadoJ2){
                    $resultadoJ1 = "pareja";
                }else{
                    $resultadoJ1 = "no pareja";
                }
            ?>
        </div>
    </div>
</body>
</html>