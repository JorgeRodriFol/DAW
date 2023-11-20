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
                $cantidadA = $_POST["a"];
                echo $cantidadA;
                ?>
            </td>
            <td>X</td>
        </tr>
        <tr>
            <td>B</td>
            <td>12.49€</td>
            <td>
                <?php
                $cantidadB = $_POST["b"];
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
                $cantidadC = $_POST["c"];
                echo $cantidadC;
                ?>
            </td>
            <td>X</td>
        </tr>
    </table>
</body>

</html>