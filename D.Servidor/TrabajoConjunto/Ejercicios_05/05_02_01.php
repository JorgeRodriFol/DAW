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
        Usa la clase "Empleado" creada anteriormente.
        Debería tener métodos get para cada uno de los atributos y otro genérico
        pero que controle el nombre del atributo solicitado, de manera que si el
        atributo no existe no devuelva nada pero no se produzca ningún error.
        A continuación define tres subclases de "Empleado" ("Trabajador", "Gerente"
        y "Becario"), cuya única diferencia estará en el sueldo: el "Becario" no tendrá
        sueldo (sueldo = 0), el "Trabajador" tendrá un sueldo comprendido entre 650
        y 1200 euros, y el Gerente entre 1500 y 2500 euros.
        Por último crea un array y almacena en él varios Empleados de cualquier tipo,
        y calcula el "Trabajador" y el "Gerente" con mayor sueldo de todos ellos.
    </h3>
    <?php
        $empleados = [
                        new Becario("Becario_1",1000), 
                        new Becario("Becario_2"), 
                        new Trabajador("Trabajador_1",10000), 
                        new Trabajador("Trabajador_2",100),
                        new Trabajador("Trabajador_3"),
                        new Trabajador("Trabajador_4"),
                        new Trabajador("Trabajador_5"),
                        new Gerente("Gerente_1"),
                        new Gerente("Gerente_2",1000000),
                        new Gerente("Gerente_3",10),
                        new Gerente("Gerente_4"),
                    ];
                    
        $empleados[2]->__set("sueldo",200000);
        $empleados[1]->sueldo =200000;
        $empleados[4]->__setSueldo(0);
        foreach($empleados as $emp){
            echo $emp->__getNombre()." -- ".$emp->__getSueldo()."<br>";
        }
        $gerenteMax = mayorPorClase("Gerente",$empleados);
        echo "El gerente con mayor sueldo es ".$gerenteMax->__getNombre()." con un sueldo de ".$gerenteMax->__getSueldo()."<br>";
        $trabajadorMax = mayorPorClase("Trabajador",$empleados);
        echo "El gerente con mayor sueldo es ".$trabajadorMax->__getNombre()." con un sueldo de ".$trabajadorMax->__getSueldo()."<br>";


        function mayorPorClase($nomClase,$array){
            $sueldoMax = 0;
            $empleado = null;
            foreach($array as $emp){
                if($emp instanceof $nomClase){
                    if($emp->__getSueldo() > $sueldoMax){
                        $sueldoMax = $emp->__getSueldo() ;
                        $empleado = $emp;
                    }
                }
            }
            return $empleado;
        }
    ?>
    
</body>
</html>