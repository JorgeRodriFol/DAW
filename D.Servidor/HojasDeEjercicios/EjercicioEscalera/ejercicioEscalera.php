<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escaleras de X escalones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Escaleras de X escalones</h1>
    <div>
        <p>Recarga la pagina para cambiar la cantidad de escalones de la escalera y sus colores</p>
        <svg width='5000' height='5000'>
            <?php
                $numEscalones = rand(10,40);
                $altura = 5;
                $posicionX = 1;
                $posicionY = $numEscalones*5;
                for($i=0; $i<=$numEscalones; $i++){
                    echo("<rect x='$posicionX' y='$posicionY' width='40' height='$altura' style='fill:rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).");stroke-width:1;stroke:rgb(0,0,0)' />");
                    $altura+=5;
                    $posicionX+=40;
                    $posicionY-=5;
                }
            ?>
        </svg>
    </div>
</body>
</html>