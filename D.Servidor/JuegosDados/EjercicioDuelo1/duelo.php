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
                    $primerDado = rand(1,6);
                    echo("<img src='../Dado$primerDado.png' >");
                    ?>
            </div>
            <div class="jugador2">
                <p style="color:white">jugador 2</p>
                <?php
                    $segundoDado = rand(1,6);
                    echo("<img src='../Dado$segundoDado.png' >");
                    ?>
            </div>
        </div>
        <div class="resultado">
            <p>Resultado</p>
            <?php
                if($primerDado == $segundoDado){
                    echo("<p>Hubo un empate</p>");
                }else if($primerDado < $segundoDado){
                    echo("Gano el jugador 2");
                }else{
                    echo("Gano el jugador 1");
                }
            ?>
        </div>
    </div>
</body>
</html>