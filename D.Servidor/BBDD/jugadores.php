<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $equipo = $_POST['equipos'];
    echo '<h1>JUGADORES DEL ' . $equipo . '</h1>';
    $con = new mysqli("localhost", "root", "", "nba");
    $consulta = "SELECT Nombre FROM jugador Where Nombre_equipo = $equipo";
    $result = $con->query($consulta);
    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            foreach ($fila as $valor) {
                echo $valor;
            }
            echo "<br>";
        }
    } else {
        echo "No se encontraron registros en la base de datos.";
    }

    $con->close();
    ?>
</body>

</html>