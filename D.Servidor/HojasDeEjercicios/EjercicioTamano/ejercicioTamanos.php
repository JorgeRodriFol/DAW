<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            echo("<svg width='400' height='150'> <circle cx='50' cy='50' r='".rand(5,150)."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />   </svg>");
            echo("<svg width='400' height='150'> <circle cx='50' cy='50' r='".rand(5,150)."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />   </svg>");
            echo("<svg width='400' height='150'> <circle cx='50' cy='50' r='".rand(5,150)."px' fill='rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255)."' />   </svg>");
        ?>
    </div>
</body>
</html>