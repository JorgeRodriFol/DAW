<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_GET["nombres"]) && is_array($_GET["nombres"]))
        $nombres = $_GET["nombres"];
    echo "<table border='1'>";
    for ($i = 0; $i < sizeof($nombres); $i++) // también se puede usar count para contar
    {
        ?>
        <tr>
            <td>
                <?php echo $nombres[$i]; ?>
            </td>
        </tr>
        <?php
    }
    echo "</table>";
    ?>
</body>

</html>