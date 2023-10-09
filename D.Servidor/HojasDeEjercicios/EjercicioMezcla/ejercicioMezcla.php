<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <svg width='1000' height='1000'>
        <?php
            $numEscalones = rand(3,15);
            $altura = 5;
            $posicionX = 1;
            for($i=0; $i<=$numEscalones; $i++){
                echo("<rect x='$posicionX' width='40' height='$altura' style='fill:rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).");stroke-width:1;stroke:rgb(0,0,0)' />");
                $altura+=5;
                $posicionX+=40;
            }
        ?>
    </svg>
</body>
</html>