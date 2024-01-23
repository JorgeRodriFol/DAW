<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
        include_once ("Calculadora.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = ucfirst(str_replace(array(".php", ".html"), "", basename($_SERVER["SCRIPT_NAME"]))); ?>
    <title><?php echo $title ?></title>
</head>
<body>
<?php
        // Incluye el archivo PHP externo
        include('../../direction.php');
        echo "<p>$thirdD</p>";
        include('../../generar_submenu.php');
        submenu('.');
    ?>
    <h2>Ejercicio <?php echo $title ?></h2>
    <h3>
        Crea una clase "Calculadora" con cuatro métodos estáticos: sumar, restar,
        multiplicar y dividir, todos ellos reciben dos parámetros y devuelven el
        resultado de la operación.<br>Prueba el funcionamiento de los métodos.<br>
        Implementa que si se intenta dividir por 0 se genere una excepción “Division
        por cero” y se muestre en pantalla toda la información: tipo de excepción,
        archivo, línea, método, parámetros.<br>
        Comprueba la diferencia que existe entre getTraceAsString y __toString.
    </h3>
    <?php
        $numeros = [0,1,4,-2,10];
        foreach ($numeros as $key => $value) {
            echo "Calculo de 2 + ".$value.": ". Calculadora::sumar(2,$value)."<br>";
        }
        foreach ($numeros as $key => $value) {
            echo "Calculo de 2 - ".$value.": ". Calculadora::restar(2,$value)."<br>";
        }
        foreach ($numeros as $key => $value) {
            echo "Calculo de 2 x ".$value.": ". Calculadora::multiplicar(2,$value)."<br>";
        }
        foreach ($numeros as $key => $value) {
            echo "Calculo de 2 / ".$value.": ". Calculadora::dividir(2,$value)."<br>";
        }
    ?>
    
</body>
</html>