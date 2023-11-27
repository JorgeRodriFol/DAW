<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejemploFormArrayResult.php" method="get" target="_self">
        <table>
            <tr>
                <td>Nombre</td>
            </tr>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <tr>
                    <td><input type="text" name="nombres[]" id="<?php echo "nombres" . $i; ?>"></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <input type="submit" />
    </form>
</body>

</html>