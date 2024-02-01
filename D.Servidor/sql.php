<?php
$con = new mysqli("localhost", "user", "user123", "jardinería");
$consulta = "SELECT * FROM `CLIENTE`";
$result = $con->query($consulta);
$campos = $result->fetch_fields();
foreach ($campos as $campo)
    echo "<br/>" . $campo->name;
?>