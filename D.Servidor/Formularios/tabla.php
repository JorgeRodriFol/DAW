<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        table * {
            border: 0.1em solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $cantidadA = $_POST["a"];
    $cantidadB = $_POST["b"];
    $cantidadC = $_POST["c"];

    $cantidadTotal = $cantidadA + $cantidadB + $cantidadC;

    $descuento;

    if ($cantidadTotal < 5) {
        $descuento = 0;
    } else if ($cantidadTotal >= 5 && $cantidadTotal <= 10) {
        $descuento = 5;
    } else if ($cantidadTotal >= 11 && $cantidadTotal <= 20) {
        $descuento = 10;
    } else if ($cantidadTotal > 20) {
        $descuento = 25;
    }
    ?>
    <table style="width:100%;">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Unidad</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>A</td>
            <td>5.99€</td>
            <td>
                <?php
                echo $cantidadA;
                ?>
            </td>
            <td>
                <?php
                echo $cantidadA * 5.99 . "€";
                ?>
            </td>
        </tr>
        <tr>
            <td>B</td>
            <td>12.49€</td>
            <td>
                <?php
                echo $cantidadB;
                ?>
            </td>
            <td>
                <?php
                echo $cantidadB * 12.49 . "€";
                ?>
            </td>
        </tr>
        <tr>
            <td>C</td>
            <td>19.99€</td>
            <td>
                <?php
                echo $cantidadC;
                ?>
            </td>
            <td>
                <?php
                echo $cantidadC * 19.99 . "€";
                ?>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <?php
                echo "Descuento (" . $descuento . "%)";
                ?>
            </td>
            <td>
                <?php
                $total = $cantidadA + $cantidadB + $cantidadC;
                echo $total * ($descuento / 100) . "€";
                ?>
            </td>
        </tr>
        <tr>
            <td>IVA (20%)</td>
            <td>
                <?php
                echo $total * 0.2 . "€";
                ?>
            </td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td>
                <?php
                echo $total - ($total * ($descuento / 100)) + ($total * 0.2) . "€";
                ?>
            </td>
        </tr>
    </table>
</body>

</html>