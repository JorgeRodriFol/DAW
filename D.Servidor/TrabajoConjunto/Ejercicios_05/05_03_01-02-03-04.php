<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include_once ("Titulo.php");
        include_once ("Menu.php");
        include_once ("Tabla.php");
        include_once ("Tabla_Avanzada.php");
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
        <ol>
            <li>
                Crea una clase “Titulo” cuyos atributos son: texto, posición (centro, izquierda,
                derecha), colortexto y colorfondo. <br>
                Al crear un objeto de la clase título se rellenará con los valores por defecto
                que son: “”, centro, negro y blanco respectivamente.<br>
                Añade métodos para poder modificar y obtener los valores de las
                propiedades y un método mostrar para visualizar el título con sus
                propiedades.<br>
            </li>
            <li>
                Define la clase “Menu” que puede almacenar una lista de “ítems” cada uno de
                ellos formado por “título” e “hipervínculo”. Además, será una clase genérica
                con un método para mostrar, sin implementación y que no se pueda
                instanciar.<br>
                Añade dos subclases “MenuVertical” y “MenuHorizontal” que añadan una
                implementación para el método “mostrar” acorde con el estilo del menú.<br>
            </li>
            <li>
                Crea una clase “Tabla” cuyos atributos serán: número de filas, número de
                columnas, contenido de las celdas y borde de la tabla.<br>
                Define un constructor que pueda recibir como parámetros el número de filas,
                número de columnas y tamaño del borde, y que en caso de faltar alguno de
                los parámetros utilice como valor 1.<br>
                Añade un método “insertar” que permita establecer el contenido de una celda,
                para ello habrá que indicar fila y columna de la celda, valor, color de texto y
                color de fondo para esa celda concreta. Debes controlar que no se inserten
                valores en celdas que no existen en la tabla.<br>
                Añade otro método “mostrar” que permita visualizar la tabla. Rellena la tabla y
                muéstrala en pantalla.<br>
            </li>
            <li>
                Modifica el ejercicio anterior de manera que cada celda de la tabla sea un
                objeto cuyas propiedades son: valor, color de texto y color de fondo.<br>
            </li>
        </ol>
    </h3>
    <?php
    //Titulo
    $colores = ["red","blue","black","white","green","grey","pink","purple","yellow","brown","orange"];//Para aleatorizar los colores
    $maxColor = count($colores)-1;
    $position = ["left","right","center"];//Para aleatorizar la posicion
    $titulo = new Titulo("Este es un título de prueba",$position[rand(0,2)],$colores[rand(0,$maxColor)],$colores[rand(0,$maxColor)]);
    echo $titulo->mostrarTitulo();
    //Menu
    $menuV = new MenuVertical();
    $menuH = new MenuHorizontal();
    echo "<h2>Menu Vertical</h2>";
    $menuV->mostrar();
    echo "<h2>Menu Horizontal</h2>";
    $menuH->mostrar();
    //Tabla
    $textoAleatorio = ["A","B","C","D","E","F","G","H"];
    $maxTexto = count($textoAleatorio)-1;
    $columnas = rand(1,100);
    $filas = rand(1,20);
    $tabla = new Tabla($filas,$columnas,rand(1,10));
    for ($i = 0; $i < $filas; $i++){
        for ($j = 0; $j < $columnas; $j++){
            $tabla->insertar($i, $j, $textoAleatorio[rand(0,$maxTexto)], $colores[rand(0,$maxColor)], $colores[rand(0,$maxColor)]);
        }
    }
    //Ejemplo de fallo 
    //$tabla->insertar(1000, 1000, $textoAleatorio[rand(0,$maxTexto)], $colores[rand(0,$maxColor)], $colores[rand(0,$maxColor)]);//Muestra un error al intentar meter fuera de la tabla
    echo "<h2>Tabla sin objetos</h2>";
    $tabla->mostrar();

    /*
    $tabla2 = new Tabla(0,10,2);
    $tabla2->mostrar();
    */
    $tabla_A = new Tabla_Avanzada($filas,$columnas,rand(1,10));
    for ($i = 0; $i < $filas; $i++){
        for ($j = 0; $j < $columnas; $j++){
            $tabla_A->insertar($i, $j, $textoAleatorio[rand(0,$maxTexto)], $colores[rand(0,$maxColor)], $colores[rand(0,$maxColor)]);
        }
    }
    echo "<h2>Tabla con objetos</h2>";
    $tabla_A->mostrar();
    ?>
    
</body>
</html>