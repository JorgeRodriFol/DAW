<?php
include "Celda.php";
class Tabla
{
    private $numColumnas;
    private $numFilas;
    private $tamanioBorde;
    private $tablero;
    function __construct()
    {
        $args = func_get_args();
        $this->numColumnas = $args[0];
        $this->numFilas = $args[1];
        $this->tamanioBorde = $args[2];
        $this->tablero = array();
        for ($i = 0; $i < $this->numFilas; $i++) {
            $columnas = array();
            for ($j = 0; $j < $this->numColumnas; $j++) {
                $celda = new Celda();
                $columnas[$j] = $celda;
            }
            $this->tablero[$i] = $columnas;
        }

    }
    function insertar($posicion, $valor, $colorTexto, $colorFondo)
    {
        $posicion = explode('-', $posicion);
        if ($posicion[0] < $this->numFilas && $posicion[1] < $this->numColumnas) {
            $celda = $this->tablero[$posicion[0]][$posicion[1]];
        }
    }
}
?>