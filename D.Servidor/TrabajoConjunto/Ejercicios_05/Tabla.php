<?php

class Tabla {
    private $numFilas;
    private $numColumnas;
    private $borde;
    private $contenido;

    // Constructor
    public function __construct($numFilas = 1, $numColumnas = 1, $borde = 1) {
        $numFilas = $this->comprobarNumero($numFilas);
        $numColumnas = $this->comprobarNumero($numColumnas);
        $borde = $this->comprobarNumero($borde);
        $this->numFilas = max(1, $numFilas); // Establecer un mínimo de 1 fila
        $this->numColumnas = max(1, $numColumnas); // Establecer un mínimo de 1 columna
        $this->borde = max(0, $borde); // Establecer un mínimo de borde 0
        $this->contenido = array_fill(0, $this->numFilas, array_fill(0, $this->numColumnas, ['valor' => '', 'colorTexto' => '', 'colorFondo' => '']));
    }
    function comprobarNumero($variable){
        if(!is_numeric($variable)){
            return 1;
        }else{
            return $variable;
        }
    }

    // Método para insertar contenido en una celda
    public function insertar($fila, $columna, $valor, $colorTexto = '', $colorFondo = '') {
        if ($fila >= 0 && $fila < $this->numFilas && $columna >= 0 && $columna < $this->numColumnas) {
            $this->contenido[$fila][$columna] = ['valor' => $valor, 'colorTexto' => $colorTexto, 'colorFondo' => $colorFondo];
        } else {
            echo '<script type="text/javascript">alert("Error: Celda fuera de los límites de la tabla.");</script>';

        }
    }
    
    // Método para mostrar la tabla
    public function mostrar() {
        echo '<table border="' . $this->borde . 'px solid black">';
        for ($i = 0; $i < $this->numFilas; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $this->numColumnas; $j++) {
                $celda = $this->contenido[$i][$j];
                echo '<td style="color:' . $celda['colorTexto'] . '; background-color:' . $celda['colorFondo'] . ';">' . $celda['valor'] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}

?>
