<?php

class Titulo
{
    private $texto;
    private $posicion;
    private $colortexto;
    private $colorfondo;

    function __construct()
    {
        $this->texto = "";
        $this->posicion = "center";
        $this->colortexto = "black";
        $this->colorfondo = "white";
    }

    function getTexto()
    {
        return $this->texto;
    }
    function setTexto($texto)
    {
        $this->texto = $texto;
    }
    function getPosicion()
    {
        return $this->posicion;
    }
    function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    }
    function getColorTexto()
    {
        return $this->colortexto;
    }
    function setColorTexto($colortexto)
    {
        $this->colortexto = $colortexto;
    }
    function getColorFondo()
    {
        return $this->colorfondo;
    }
    function setColorFondo($colorfondo)
    {
        $this->colorfondo = $colorfondo;
    }

    function __toString()
    {
        $titulo = '<h1 style="background-color:' . $this->colorfondo . '; text-align:' . $this->posicion . '; color:' . $this->colortexto . ';">' . $this->texto . '</h1>';
        return $titulo;
    }
}

?>