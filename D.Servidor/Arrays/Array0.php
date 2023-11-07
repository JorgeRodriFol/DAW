<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombres = array("medusa", "tiburon", "tortuga") ;
        $imagenes = array("medusa.png","tiburon.png","tortuga.png") ;
        $animales = array($nombres, $imagenes) ;
        $indice = rand(0, count($nombres) -1) ;

        echo"<p>". $animales[0][$indice] ."</p> <img src='". $animales[1][$indice] ."' alt='". $animales[0][$indice] ."'>";
        
    ?>
</body>
</html>