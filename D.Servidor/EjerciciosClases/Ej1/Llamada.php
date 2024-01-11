<?php
include "Empleado.php";
$a = new Empleado();
echo $a->nombre . " " . $a->sueldo;
$b = new Empleado("Fernan");
echo $b->nombre . " " . $b->sueldo;
$c = new Empleado(1234);
echo $c->nombre . " " . $c->sueldo;
$d = new Empleado("Alan", 1234);
echo $d->nombre . " " . $d->sueldo;
?>