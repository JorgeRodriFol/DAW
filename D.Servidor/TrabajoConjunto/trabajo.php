<!--Jorge Rodríguez y Pablo Merillas-->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once "Phtml.php";
include_once "Tabla_Avanzada.php";
include_once "Empleado.php";
include_once "Calculadora.php";
$phtml = new Phtml("Empleados");
$phtml->cabecera();
$phtml->addEtiqueta("h1", "Tabla de Empleados");

$tabla = new Tabla_Avanzada(5, 3);
$listaEmpleados = [new Empleado("Juan", 1000), new Empleado("Pedro", 1032), new Empleado("Juan", 1100), new Empleado("Marta", 1132)];
for ($i = 0; $i < 4; $i++) {
    $tabla->insertar($i, 0, $listaEmpleados[$i]->__getId());
    $tabla->insertar($i, 1, $listaEmpleados[$i]->__getNombre());
    $tabla->insertar($i, 2, $listaEmpleados[$i]->__getSueldo());
}

$phtml->addContenido($tabla->mostrar());
$calculadora = new Calculadora();
$total = 0;
for ($i = 1; $i < 3; $i++) {
    if ($i == 1) {
        $total = $listaEmpleados[0]->__getSueldo();
    }
    $total += $calculadora->sumar($listaEmpleados[$i]->__getSueldo(), $listaEmpleados[++$i]->__getSueldo());
}

$phtml->addTexto("Gastos en sueldos: " . $total);
$phtml->addTexto("Media de sueldos: " . $calculadora->dividir($total, count($listaEmpleados)));
$sueldoPar1 = $calculadora->sumar($listaEmpleados[0], $listaEmpleados[1]);

$phtml->pie();
echo $phtml->getPagina();
?>