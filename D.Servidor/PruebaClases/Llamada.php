<?php
include "Clase.php";
echo "Creamos el objeto...</br>";
$a = new Clase();
echo "Objeto creado </br>";
echo "Valor atrib1: $a->atrib1 </br>";
echo "Valor atrib2: $a->atrib2 </br>";
echo "Asignamos un valor a un atributo publico... </br>";
$a->atrib1 = "Uno";
echo "Valor atrib1: $a->atrib1 </br>";
echo "Asignamos un valor a un atributo privado... </br>";
$a->atrib2 = "Dos";
echo "Valor atrib2: $a->atrib2 </br>";
?>