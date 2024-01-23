<?php

class Calculadora {

    static function identificarError($e){
        return "<br>***********ERROR************".
            "<br>Error: " . $e->getMessage().
            "<br>Código: ".$e->getCode().
            "<br>Fichero: ".$e->getFile().
            "<br>Linea: ".$e->getLine().
            "<br>Información: ".$e->getTraceAsString ().
            "<br>******************************<br>";
    }
    static function sumar($x,$y){
        $z = "Error";
        try{
            $z = $x + $y;
        }
        catch (Error $e){
            $z = self::identificarError($e);
        }
        return $z;
    }
    static function restar($x,$y){
        try{
            return $x - $y;
        }
        catch (Error $e){
            $z = self::identificarError($e);
        }
    }
    static function multiplicar($x,$y){
        try{
            return $x * $y;
        }
        catch (Error $e){
            $z = self::identificarError($e);
        }
    }
    static function dividir($x,$y){
        $z = "Error";
        try{
            $z = $x / $y;
        }
        catch (DivisionByZeroError $e) {
            $z = self::identificarError($e);
        }
        catch (Error $e){
            $z = self::identificarError($e);
        }
        return $z;
    }

    


}
    

?>
