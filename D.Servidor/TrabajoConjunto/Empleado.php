<?php
class Empleado
{
    static $numEmpleado = 0;
    protected $nombre;
    protected $sueldo;

    static $contador = 0;
    protected $id = 0;


    function __construct()
    {
        $this->generarId();
        $argumento = func_get_args(); //Genera un array con lo argumentos aportados
        $numArgs = func_num_args(); //Cuenta el numero de argumenos
        //echo $numArgs;
        if ($numArgs == 0) {
            $this->nombre = "Empleado_" . self::$numEmpleado;
            $this->sueldo = $this->iniciarSueldo();
            self::$numEmpleado++;
        } else if ($numArgs == 1) {
            if (is_string($argumento[0])) {
                $this->nombre = $argumento[0];
                $this->sueldo = $this->iniciarSueldo();
            } else {
                $this->nombre = "Empleado_" . self::$numEmpleado;
                $this->sueldo = $argumento[0];
                self::$numEmpleado++;
            }
        } else if ($numArgs == 2) {
            if (is_string($argumento[0]) && (is_int($argumento[1]) || is_float($argumento[1]))) {
                $this->nombre = $argumento[0];
                $this->sueldo = $argumento[1];
            } else {
                $this->nombre = "Empleado_" . self::$numEmpleado;
                self::$numEmpleado++;
                $this->sueldo = $this->iniciarSueldo();
            }
        }
    }
    function iniciarSueldo()
    {
        return 0;
    }

    function generarId()
    {
        $this->id = self::$contador;
        self::$contador++;
    }

    function __getId()
    {
        return $this->id;
    }
    function __getNombre()
    {
        return $this->nombre;
    }
    function __getSueldo()
    {
        return $this->sueldo;
    }
    function __setNombre($valor)
    {
        if (is_string($valor)) {
            $this->nombre = $valor;
            return true;
        } else {
            return false;
        }
    }
    function __setSueldo($valor)
    {
        if (is_int($valor) || is_float($valor)) {
            $this->sueldo = $valor;
            return true;
        } else {
            return false;
        }

    }

    function __get($atributo)
    {
        if ($atributo == "nombre" || $atributo == "sueldo") {
            return $this->$atributo;
        } else {
            return null;
        }
    }

    function __set($atributo, $valor)
    {
        if ($atributo == "nombre") {
            if (is_string($valor)) {
                $this->$atributo = $valor;
            }
        } else if ($atributo == "sueldo") {
            if ((is_int($valor) || is_float($valor))) {
                $this->$atributo = $valor;
            }
        }
    }
}
class Becario extends Empleado
{
    function __construct()
    {
        $args = func_get_args();
        parent::__construct(...$args);
        $this->sueldo = 0;
    }
    function __set($atributo, $valor)
    {
        if ($atributo == "nombre") {
            if (is_string($valor)) {
                $this->$atributo = $valor;
            }
        } else if ($atributo == "sueldo") {
            $this->$atributo = 0;
        }
    }
    function __setSueldo($valor)
    {
        if (is_int($valor) || is_float($valor)) {
            $this->sueldo = 0;
            return true;
        } else {
            return false;
        }

    }
}

class Trabajador extends Empleado
{
    function __construct()
    {
        $args = func_get_args();
        parent::__construct(...$args);
        if ($this->sueldo < 650) {
            $this->sueldo = 650;
        } else if ($this->sueldo > 1200) {
            $this->sueldo = 1200;
        }

    }
    function __set($atributo, $valor)
    {
        if ($atributo == "nombre") {
            if (is_string($valor)) {
                $this->$atributo = $valor;
            }
        } else if ($atributo == "sueldo") {
            if ((is_int($valor) || is_float($valor))) {
                if ($valor >= 650 && $valor <= 1200) {
                    $this->$atributo = $valor;
                } else if ($valor < 650) {
                    $this->$atributo = 650;
                } else {
                    $this->$atributo = 1200;
                }
            }
        }
    }
    function iniciarSueldo()
    {
        return rand(650, 1200);
    }
    function __setSueldo($valor)
    {
        if (is_int($valor) || is_float($valor)) {
            if ($valor >= 650 && $valor <= 1200) {
                $this->sueldo = $valor;
            } else if ($valor < 650) {
                $this->sueldo = 650;
            } else {
                $this->sueldo = 1200;
            }
        } else {
            return false;
        }

    }
}

class Gerente extends Empleado
{
    function __construct()
    {
        $args = func_get_args();
        parent::__construct(...$args);
        if ($this->sueldo < 1500) {
            $this->sueldo = 1500;
        } else if ($this->sueldo > 2500) {
            $this->sueldo = 2500;
        }
    }

    function __set($atributo, $valor)
    {
        if ($atributo == "nombre") {
            if (is_string($valor)) {
                $this->$atributo = $valor;
            }
        } else if ($atributo == "sueldo") {
            if ((is_int($valor) || is_float($valor))) {
                if ($valor >= 1500 && $valor <= 2500) {
                    $this->$atributo = $valor;
                } else if ($valor < 1500) {
                    $this->$atributo = 1500;
                } else {
                    $this->$atributo = 2500;
                }
            }
        }
    }
    function iniciarSueldo()
    {
        return rand(1500, 2500);
    }
    function __setSueldo($valor)
    {
        if (is_int($valor) || is_float($valor)) {
            if ($valor >= 1500 && $valor <= 2500) {
                $this->sueldo = $valor;
            } else if ($valor < 1500) {
                $this->sueldo = 1500;
            } else {
                $this->sueldo = 2500;
            }
        } else {
            return false;
        }

    }
}
?>