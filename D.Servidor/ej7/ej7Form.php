<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="./ej7Form2.php">
        <label>Número de valores:</label>
        <input type="number" name="numvalores" required><br>
        <label>Función a calcular:</label>
        <select name="funcion" required>
            <option value="minimo">Mínimo</option>
            <option value="maximo">Máximo</option>
            <option value="suma">Suma</option>
            <option value="media">Media</option>
        </select><br>
        <input type="submit" value="Siguiente">
    </form>
</body>

</html>