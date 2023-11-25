<!--Escriba un programa que cada vez que se ejecute muestre cuatro círculos contiguos
con un radio entre 50 y 150 píxeles, al azar-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CUATRO CIRCULOS</h1>

    <?php
    $radio = rand(50,150);

    echo "<p>Estos circulos tienen $radio px de radio. Actualice la página para mostrar cuatro nuevos circulos</p>";
    echo "<svg heigth='200' width='1000'>";
    for($i = 1; $i <= 7; $i+=2){
        echo "<circle cx='".$radio*$i."' cy='$radio' r='$radio' fill='rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")'/>";
    }
    
    echo "</svg>";
    ?>
</body>
</html>