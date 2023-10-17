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

                $parejaJ2;
                if($primerDadoJ2 == $segundoDadoJ2){
                    $parejaJ2 = true;
                }else{
                    $parejaJ2 = false;
                }
                echo($parejaJ1);

                $resultado;
                if($parejaJ1 == true && $parejaJ2 == false){
                    $resultado = "Gana el jugador 1 por pareja de $primerDadoJ1";
                }else if($parejaJ1 == false && $parejaJ2 == true){
                    $resultado = "Gana el jugador 2 por pareja de $primerDadoJ2";
                }else{
                    $altoJ1;
                    $bajoJ1;
                    if($primerDadoJ1 > $segundoDadoJ1){
                        $altoJ1 = $primerDadoJ1;
                        $bajoJ1 = $segundoDadoJ1;
                    }else{
                        $altoJ1 = $segundoDadoJ1;
                        $bajoJ1 = $primerDadoJ1;
                    }

                    $altoJ2;
                    if($primerDadoJ2 > $segundoDadoJ2){
                        $altoJ2 = $primerDadoJ2;
                        $bajoJ2 = $segundoDadoJ2;
                    }else{
                        $altoJ2 = $segundoDadoJ2;
                        $bajoJ2 = $primerDadoJ2;
                    }

                    if($altoJ1 > $altoJ2){
                        $resultado = "Gana el jugador 1 por numero mas hato de $altoJ1";
                    }else if($altoJ1 < $altoJ2){
                        $resultado = "Gana el jugador 2 por numero mas hato de $altoJ2";
                    }else if($bajoJ1 > $bajoJ2){
                        $resultado = "Gana el jugador 1 por numero mas hato de $altoJ1";
                    }else if($bajoJ1 < $bajoJ2){
                        $resultado = "Gana el jugador 2 por numero mas hato de $altoJ2";
                    }else{
                        $resultado = "Empate";
                    }
                } 
                echo("<p>$resultado</p>");
            ?>
        </div>
    </div>
</body>
</html>