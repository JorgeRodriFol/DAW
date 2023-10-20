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
        echo("<table style='border-style:solid; border-color:black'>");
        echo("<tr style='border-style:solid; border-color:black'>");
        for ($i = 0; $i < $numCirculos; $i++) {
            echo("<th style='border-style:solid; border-color:black'><div style='background: rgb(".rand(0,255).",".rand(0,255).",".rand(0,255)."); border-radius: 50%; width: 100px; height: 100px;'><h1>".rand(1,10)."</h1></div></th>");
        }
        echo("</tr>");
        echo("</table>");
    ?>
</body>
</html>