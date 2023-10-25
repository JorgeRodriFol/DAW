<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
echo("<svg width='420' height='420' viewBox='-210 -210 420 420'>");

for ($i = 0; $i < 5; $i++) {
    echo("<circle cx='0' cy='0' r='" . (200 - 40 * $i) . "' fill='red' />");
    echo("<circle cx='0' cy='0' r='" . (200 - 40 * $i - 20) . "' fill='#ddd' />");
}

for ($i = 0; $i < 10; $i++) {
    echo("<text x='0' y='" . (195 - 20 * $i) . "' text-anchor='middle' font-size='13'>" . ($i + 1) . "</text>");
}

$puntos = 0;
$disparos = rand(1, 10);
for ($i = 0; $i < $disparos; $i++) {
    $x = rand(-200, 200);
    $y = rand(-200, 200);
    $puntos += ((10 - intdiv(sqrt($x ** 2 + $y ** 2), 20)) > 0 ? (10 - intdiv(sqrt($x ** 2 + $y ** 2), 20)) : 0);
    echo("<circle cx='$x' cy='$y' r='5' stroke='' fill='black' />\n");
}

echo("</svg>");
echo("<h2>Estadísticas</h2>");
echo("<p>Número de disparos: $disparos.</p>");
echo("<p>Puntuación obtenida: $puntos.</p>");
?>
</body>
</html>