<?php

class Item
{
    private $titulo;
    private $hipervinculo;
    function __construct()
    {
        $args = func_get_args();
        $this->titulo = $args[0];
        $this->hipervinculo = $args[1];
    }
    function getTitulo()
    {
        return $this->titulo;
    }
    function getHipervinculo()
    {
        return $this->hipervinculo;
    }
}

?>