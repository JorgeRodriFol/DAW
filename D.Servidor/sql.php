<?php
$con = new mysqli("localhost", "root", "", "nba");
$consulta = "SELECT Nombre FROM equipo";
$result = $con->query($consulta);

if ($result->num_rows > 0) {
    // Obtener los nombres de los campos
    $campos = $result->fetch_fields();
    foreach ($campos as $campo) {
        echo "<strong>" . $campo->name . "</strong> ";
    }
    echo "<br>";

    // Mostrar los valores de los registros
    while ($fila = $result->fetch_assoc()) {
        foreach ($fila as $valor) {
            echo $valor . " ";
        }
        echo "<br>";
    }
} else {
    echo "No se encontraron registros en la base de datos.";
}

$con->close();
?>