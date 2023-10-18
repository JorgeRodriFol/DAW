<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numCirculos = rand(1,10);
        echo("<table style='width:100%'>");
        echo("<tr style='border-color:black'>");
        for ($i = 0; $i < $numCirculos; $i++) {
            echo("<th><div style='background: black; border-radius: 50%; width: 100px; height: 100px;'></div></th>");
        }
        echo("</tr>");
    ?>
</body>
</html>