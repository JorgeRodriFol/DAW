<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="texto">Escriba el texto a limpiar:</label>
        <input type="text" name="texto"/>
    </form>
    <?php
    if(isset($_POST['texto'])){
        echo '<p>'.trim($_POST['texto']).'</p>';
    }
    ?>
</body>
</html>