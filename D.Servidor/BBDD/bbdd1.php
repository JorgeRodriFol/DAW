<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $con = new mysqli("localhost", "root", "", "nba");
    ?>
    <form action="jugadores.php" method="post">
        <label for="equipos">Selecciona un equipo:</label>
        <select name="equipos" required>
            <?php
            $consulta = "SELECT Nombre FROM equipo";
            $result = $con->query($consulta);
            if ($result->num_rows > 0) {
                while ($fila = $result->fetch_assoc()) {
                    foreach ($fila as $valor) {
                        echo '<option value="' . $valor . '">' . $valor . '</option>';
                    }
                }
            }
            $con->close();
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>

</html>