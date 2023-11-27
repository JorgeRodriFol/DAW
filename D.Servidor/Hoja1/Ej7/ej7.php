<!-- Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1
y 6, al azar, y coloque la ficha en la posición correspondiente.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>AVANCE DE FICHA</h1>
    <p>Actualice la pagina para mostrar la nueva tirada</p>

    <?php
    $tirada = rand(1, 6);
    $posicion = 80 * $tirada - 40;

    echo "<div style='display:flex'>";

    for ($i = 1; $i <= 6; $i++) {
        echo "<div style='heigth:80px; width:80px; border:0.1em black solid; text-align:center'>";
        if ($i == $tirada) {
            echo "<svg width='50' heigth='50'>";
            echo "<circle cx='$posicion' cy='40' r='25' fill='red'/>";
            echo "</svg>";
        } else {
            echo "<h1>$i</h1>";
        }
        echo "</div>";
    }

    echo "</div>";
    ?>

    <!--<div style="display:flex">
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>1</h1>
        </div>
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>2</h1>
        </div>
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>3</h1>
        </div>
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>4</h1>
        </div>
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>5</h1>
        </div>
        <div style="heigth:80px; width:80px; border:0.1em black solid; text-align:center">
            <h1>6</h1>
        </div>
    </div>-->
</body>

</html>