<?php
include "Item.php";
abstract class Menu
{
    protected $lista;

    function __construct()
    {
        $this->lista = array();
        $item1 = new Item("Google", "https://www.google.es");
        $this->lista[0] = $item1;
        $item2 = new Item("Wikihow", "https://es.wikihow.com/Portada");
        $this->lista[1] = $item2;
        $item3 = new Item("Google", "https://github.com");
        $this->lista[2] = $item3;
    }

    abstract function mostrar();
}

class MenuHorizontal extends Menu
{
    function mostrar()
    {
        $texto = '<div style="display:flex; gap:50px; justify-content:center; width:100vw; height:10vh;">';
        foreach ($this->lista as $item) {
            $texto .= '<a href="' . $item->getHipervinculo() . '">' . $item->getTitulo() . '</a>';
        }
        $texto .= '</div>';
        return $texto;
    }
}

class MenuVertical extends Menu
{
    function mostrar()
    {
        $texto = '<div style="display:flex; gap:50px; justify-content:center; width:30vw; height:100vh; flex-direction:column;">';
        foreach ($this->lista as $item) {
            $texto .= '<a href="' . $item->getHipervinculo() . '">' . $item->getTitulo() . '</a>';
        }
        $texto .= '</div>';
        return $texto;
    }
}
?>