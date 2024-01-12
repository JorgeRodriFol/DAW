<?php
include "Titulo.php";
echo "Creando objeto...</br>";
$titulo = new Titulo();
echo "Objeto creado</br>";
echo 'Valor de texto: ' . $titulo->getTexto() . '</br>';
echo 'Valor de posicion: ' . $titulo->getPosicion() . '</br>';
echo 'Valor de colortexto: ' . $titulo->getColorTexto() . '</br>';
echo 'Valor de colorfondo: ' . $titulo->getColorFondo() . '</br>';
$titulo->setTexto("Probando la creacion dinamica");
$titulo->setColorFondo("blue");
echo $titulo->__toString();
?>