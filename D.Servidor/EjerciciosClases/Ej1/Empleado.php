<?php
class Empleado
{
    public $nombre;
    public $sueldo;

    function __construct()
    {
        echo "Construllendo objeto...";
        $args = func_get_args();
        $numArgs = func_num_args();
        if ($numArgs == 0 || $numArgs > 2) {
            $this->nombre = "Empleado";
            $this->sueldo = 0;
        } else {
            if ($numArgs == 1) {
                if (is_string($args[0])) {
                    $this->nombre = $args[0];
                    $this->sueldo = 0;
                } else if (is_numeric($args[0])) {
                    $this->nombre = "Empleado";
                    $this->sueldo = $args[0];
                }
            } else {
                if ($numArgs == 2) {
                    if (is_string($args[0]) && is_numeric($args[1])) {
                        $this->nombre = $args[0];
                        $this->sueldo = $args[1];
                    } else {
                        $this->nombre = "Empleado";
                        $this->sueldo = 0;
                    }
                }
            }
        }
    }
}
?>