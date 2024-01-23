<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include_once ("Empleado.php");
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
        Crea una clase “Empleado” con dos atributos públicos “nombre” y “sueldo”.
        Añade un constructor que funcione con 0, 1 y 2 parámetros:
        <ul>
            <li>
                0 Parámetros: creará un empleado genérico cuyo nombre será “Empleado”
                seguido del número de empleado que se irá incrementando con cada nueva
                creación de un empleado que no reciba nombre (variable de clase o static) y
                cuyo sueldo será 0.
            </li>
            <li>
                1 Parámetro: comprobará si lo que recibe es una cadena o un número y se lo
                asignará al atributo que le corresponda según su tipo (nombre o sueldo), el
                otro atributo se rellenará con el valor genérico correspondiente.
            </li>
            <li>
                2 Parámetros: comprobará que el primer parámetro es una cadena y el
                segundo un número, en cuyo caso asignará cada valor al atributo
                correspondiente.
            </li>
            <li>
                En caso de que se reciba un número de parámetros diferente o de que los
                parámetros no encajen en los tipos establecidos se tratará como si no se
                hubiera recibido ningún parámetro.
            </li>
        </ul>
        Crea varios objetos con todas las posibles combinaciones y comprueba que los
        atributos reciben los valores de forma correcta.
    </h3>
    <?php
        $a = new Empleado();
        $b = new Empleado(12);
        $c = new Empleado("Pablo");
        $d = new Empleado("Pablo",123);
        $e = new Empleado(123,"Pablo");

        echo "A: Sin datos: ".$a->nombre." -- ".$a->sueldo."</br>".
            "B: Solo sueldo: ".$b->nombre." -- ".$b->sueldo."</br>".
            "C: Solo nombre: ".$c->nombre." -- ".$c->sueldo."</br>".
            "D: Nombre y sueldo: ".$d->nombre." -- ".$d->sueldo."</br>".
            "E: Sueldo y nombre: ".$e->nombre." -- ".$e->sueldo."</br>";

        echo "</br>GET Y SET</br>".
            "A: Muestro apellido (no existe): ".$a->__get("apellido")."</br>".
            "B: Muestro nombre: ".$b->__get("nombre")."</br>".
            "C: Muestro sueldo: ".$c->__get("sueldo")."</br>".
            "A: Cambio el nombre en a.".$a->__set("nombre","CambioDeNombre")."</br>".
            "A: Muestro el nuevo nombre: ".$a->__getNombre()."</br>".
            "A: Cambio el nombre en a.".$a->__setNombre("SegundoCambioDeNombre")."</br>".
            "A: Muestro el nuevo nombre: ".$a->__getNombre()."</br>";

    ?>
    
</body>
</html>