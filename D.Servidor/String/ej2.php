<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="texto">Introduzca el texo a traducir:</label>
        <textarea name="texto" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
        $palabras = explode(" ", $texto);
        foreach($palabras as &$palabra){
            if(preg_match("/^[aeiouAEIOU]/", $palabra)){
                $palabra.="ay";
            }else{
                $consonantes = strcspn($palabra, 'aeiouAEIOU');
                $palabra = substr($palabra, $consonantes) . substr($palabra, 0, $consonantes) . 'ay';
            }
        }
        $textoTraducido = implode(' ', $palabras);
        echo "<p>".$textoTraducido.'</p>';
    }
    ?>
</body>
</html>