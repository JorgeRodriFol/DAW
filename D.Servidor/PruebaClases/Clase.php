<?php
class Clase{
    public $atrib1;
    private $atrib2;
    function __construct(){
        echo "Dntro del constructor...";
        $this->atrib1="---";
        $this->atrib2="---";
    }
    function __get($name){
        echo "Dentro del get...";
        return $this->$name;
    }
    function __set($name, $value){
        echo "Dentro del set...";
        $this->$name = $value;
    }
}
?>