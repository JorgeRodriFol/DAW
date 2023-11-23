<!--Escriba un programa que cada vez que se ejecute muestre tres círculos solapados,
cada uno de un color elegido al azar (uno rojo, uno verde y uno azul).-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CIRCULOS DE COLOR</h1>
    <p>Actualice la pagina para mostrar nuevos circulos</p>
    <?php
    $rojo = rand(64, 255);
    $verde = rand(64, 255);
    $azul = rand(64, 255);

    print "    <svg width='400' height='300' viewBox='-200 -120 400 300'>";
    print "      <text x='100' y='-90' text-anchor='start' font-size='20'>Verde: $verde</text>";
    print "      <text x='-100' y='-90' text-anchor='end' font-size='20'>Azul: $azul</text>";
    print "      <text x='0' y='155' text-anchor='middle' font-size='20'>Rojo: $rojo</text>";
    print "      <path fill='rgb($rojo 0 0)' stroke='black' stroke-width='1' d='M -73.85 36.92 A 75 75, 0, 1, 0, 73.85 36.92 A 75 75 0, 0, 1, 0 33.44 A 75 75 0, 0, 1, -73.85 36.92' />";
    print "      <path fill='rgb(0 $verde 0)' stroke='black' stroke-width='1' d='M 73.85 36.92 A 75 75, 0, 1, 0, 0 -93.44 A 75 75 0, 0, 1, 33.85 -16.92 A 75 75 0, 0, 1, 73.85 36.92' />";
    print "      <path fill='rgb(0 0 $azul)' stroke='black' stroke-width='1' d='M 0 -93.44 A 75 75, 0, 1, 0, -73.85 36.92 A 75 75 0, 0, 1, -33.85 -16.92 A 75 75 0, 0, 1, 0 -93.44' />";
    print "      <path fill='rgb($rojo $verde 0)' stroke='black' stroke-width='1' d='M 73.85 36.92 A 75 75, 0, 0, 0, 33.85 -16.92 A 75 75 0, 0, 1, 0 33.44 A 75 75 0, 0, 0, 73.85 36.92' />";
    print "      <path fill='rgb($rojo 0 $azul)' stroke='black' stroke-width='1' d='M -73.85 36.92 A 75 75, 0, 0, 0, 0 33.44 A 75 75 0, 0, 1, -33.85 -16.92 A 75 75 0, 0, 0, -73.85 36.92' />";
    print "      <path fill='rgb(0 $verde $azul)' stroke='black' stroke-width='1' d='M 0 -93.44 A 75 75, 0, 0, 0, -33.85 -16.92 A 75 75 0, 0, 1, 33.85 -16.92 A 75 75 0, 0, 0, 0 -93.44' />";
    print "      <path fill='rgb($rojo $verde $azul)' stroke='black' stroke-width='1' d='M 0 33.44 A 75 75, 0, 0, 0, 33.85 -16.92 A 75 75 0, 0, 0, -33.85 -16.92 A 75 75 0, 0, 0, 0 33.44' />";
    print "    </svg>";
    ?>
</body>

</html>