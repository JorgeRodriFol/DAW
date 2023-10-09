<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <svg width='1000' height='1000'>
            <?php
                $radio1 = rand(5,150);
                $radio2 = rand(5,150);
                $radio3 = rand(5,150);
                $distancia2 = $radio2+$radio1*2;
                $distancia3 = $radio3+$distancia2+$radio2;
                echo("<circle cx='$radio1' cy='150' r='".$radio1."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />");
                echo("<circle cx='$distancia2' cy='150' r='".$radio2."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />");
                echo("<circle cx='$distancia3' cy='150' r='".$radio3."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />");
            ?>
        </svg>
        
    </div>
</body>
</html>