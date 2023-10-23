<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    $tamano = 600;
    $numDisparos = rand(1,10);
    echo("<svg width='1000' height='1000'>");
        for($indice = 1; $indice <= 10; $indice++){
            if($indice%2 == 0){
                echo("<div style='background-color:white;border-radius:50%; zindex:$indice; height:".$tamano."px; width:".$tamano."px; padding:28px; text-align: center;'>");
            }else{
                echo("<div style='background-color:red;border-radius:50%; zindex:$indice; height:".$tamano."px; width:".$tamano."px; padding:28px; text-align: center;'>");
            }
            
            $tamano -=60;
        }
        for($indice = 10; $indice >= 1; $indice--){
            echo("<p'>$indice</p>") ;
            echo("</div>");
        }

        for($indice = 0; $indice < $numDisparos; $indice++){
            echo("<circle cx='".rand(28,600)."' cy='".rand(28,600)."' r='5' stroke='' fill='black' />") ;
        }

        echo("</svg>");
    ?>
</body>
</html>