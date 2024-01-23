<?php

class Tabla_Avanzada
{
    private $numFilas;
    private $numColumnas;
    private $borde;
    private $contenido;

    // Constructor
    public function __construct($numFilas = 1, $numColumnas = 1, $borde = 1)
    {
        $numFilas = $this->comprobarNumero($numFilas);
        $numColumnas = $this->comprobarNumero($numColumnas);
        $borde = $this->comprobarNumero($borde);
        $this->numFilas = max(1, $numFilas); // Establecer un mínimo de 1 fila
        $this->numColumnas = max(1, $numColumnas); // Establecer un mínimo de 1 columna
        $this->borde = max(0, $borde); // Establecer un mínimo de borde 0
        $this->contenido = array();
        $this->contenido = array(); // Inicializa el array que contendrá las filas de la tabla
        for ($i = 0; $i < $this->numFilas; $i++) {
            $this->contenido[$i] = array(); // Inicializa un array para representar una fila de la tabla
            for ($j = 0; $j < $this->numColumnas; $j++) {
                $this->contenido[$i][$j] = new Celda(); // Crea una nueva instancia de la clase Celda y la asigna a la celda correspondiente en la tabla
            }
        }
    }

    private function comprobarNumero($variable)
    {
        if (!is_numeric($variable)) {
            return 1;
        } else {
            return $variable;
        }
    }

    // Método para insertar contenido en una celda
    public function insertar($fila, $columna, $valor, $colorTexto = '', $colorFondo = '')
    {
        if ($fila >= 0 && $fila < $this->numFilas && $columna >= 0 && $columna < $this->numColumnas) {
            $this->contenido[$fila][$columna]->setValor($valor);
            $this->contenido[$fila][$columna]->setColorTexto($colorTexto);
            $this->contenido[$fila][$columna]->setColorFondo($colorFondo);
        } else {
            echo '<script type="text/javascript">alert("Error: Celda fuera de los límites de la tabla.");</script>';
        }
    }

    // Método para mostrar la tabla
    public function mostrar()
    {
        $temp = '<table border="' . $this->borde . 'px solid black">';
        for ($i = 0; $i < $this->numFilas; $i++) {
            $temp .= '<tr>';
            for ($j = 0; $j < $this->numColumnas; $j++) {
                $celda = $this->contenido[$i][$j];
                $temp .= '<td style="color:' . $celda->getColorTexto() . '; background-color:' . $celda->getColorFondo() . ';">' . $celda->getValor() . '</td>';
            }
            $temp .= '</tr>';
        }
        $temp .= '</table>';
        return $temp;
    }
}

class Celda
{
    private $valor;
    private $colorTexto;
    private $colorFondo;

    public function __construct()
    {
        $this->valor = "";
        $this->colorTexto = "";
        $this->colorFondo = "";
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setColorTexto($colorTexto)
    {
        $this->colorTexto = $colorTexto;
    }

    public function getColorTexto()
    {
        return $this->colorTexto;
    }

    public function setColorFondo($colorFondo)
    {
        $this->colorFondo = $colorFondo;
    }

    public function getColorFondo()
    {
        return $this->colorFondo;
    }
}

?>