<?php
class Titulo{
    protected $texto = "";
    protected $posicion = "center";
    protected $colortexto = "black";
    protected $colorfondo = "white";
    
    function __construct(){
        $argumento = func_get_args();
        $numArg = func_num_args();
        if ($numArg == 4){
            $this->texto = $argumento[0];
            $this->posicion = $argumento[1];
            $this->colortexto = $argumento[2];
            $this->colorfondo = $argumento[3];
        }
        
    }
    
    function __getTexto(){
        return $this->texto;
    }
    function __getPosicion(){
        return $this->posicion;
    }
    function __getColortexto(){
        return $this->colortexto;
    }
    function __getColorfondo(){
        return $this->colorfondo;
    }

    function __setTexto($variable){
        $this->texto = $variable;
    }
    function __setPosicion($variable){
        if($variable === "left" || $variable === "right" || $variable === "center"){
            $this->Posicion = $variable;
        }else{
            echo "Dato no incorporado: ".$variable."<br>";
        }
        
    }
    function __setColortexto($variable){
        $this->colortexto = $variable;
    }
    function __setColorfondo($variable){
        $this->colorfondo = $variable;
    }

    function mostrarTitulo(){
        echo '<h1 style="
            color: '.$this->colortexto.'; 
            text-align: '.$this->posicion.'; 
            background-color: '.$this->colorfondo.';
            ">'.$this->texto.'</h1>';
    }
}