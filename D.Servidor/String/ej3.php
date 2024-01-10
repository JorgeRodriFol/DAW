<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="texto">Texto</label>
        <textarea name="texto" id="" cols="30" rows="10"></textarea>
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar" id="">
        <label for="remplazar">Remplazar:</label>
        <input type="text" name="remplazar" id="">
        <input type="submit" value="Cambiar">
    </form>

    <?php
    if(isset($_POST['remplazar'])){
        $textoCambiado = str_replace($_POST['buscar'],$_POST['remplazar'],$_POST['texto']);

        echo '<p>'.$textoCambiado.'</p>';
    }else{
        $textoCambiado = str_replace($_POST['buscar'],'<strong>'.$_POST['buscar'].'</strong>',$_POST['texto']);
        echo '<p>'.$textoCambiado.'</p>';
    }
    ?>
</body>
</html>