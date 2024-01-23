<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
        include_once ("FuncionesMatematicas.php");
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
        Crea una clase “FuncionesMatemáticas” con dos métodos:
        <ol>
            <li>
                Método que reciba 3 argumentos a, b y c y que resuelva la ecuación
                de segundo grado ax2 + bx + c = 0.<br>Si la ecuación no tiene soluciones,
                la función devolverá un mensaje de error.
            </li>
            <li>
                Método para calcular el factorial de un número que recibirá como
                argumento.<br>Devolverá el factorial o producirá una excepción si el
                argumento no es entero positivo.
            </li>
        </ol>                
        A continuación, escribe una página con un formulario donde se dé opción al
        usuario de elegir una de las dos funciones matemáticas (ecuación de
        segundo grado o factorial), en función de la opción seleccionada se pedirá al
        usuario el número de parámetros correspondiente y finalmente devuelva el
        resultado al usuario.            
    </h3>
    <?php
   
    ?>
    
</body>
</html>