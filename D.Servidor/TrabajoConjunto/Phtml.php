<?php
class Phtml
{
    protected $titulo;
    protected $pagina = "";
    function __construct($nuevoTitulo = "Empleados")
    {
        $this->titulo = $nuevoTitulo;
    }
    function getPagina()
    {
        return $this->pagina;
    }
    function addContenido($contenido)
    {
        $this->pagina .= $contenido . "\n";
    }
    //Este método sirve para crear la cabecera
    function cabecera()
    {
        $temp = "<!DOCTYPE html html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//ES' \n";
        $temp .= "'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>\n";
        $temp .= "<html lang='ES' dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>\n";
        $temp .= "<head>\n";
        $temp .= " <title>$this->titulo</title>\n";
        $temp .= "</head>\n";
        $temp .= "<body>\n";
        $this->addContenido($temp);
    }
    //Este método sirve para crear el fin de la página
    function pie()
    {
        $temp = "</body>\n";
        $temp .= "</html>";
        $this->addContenido($temp);
    }
    //El siguiente método permite añadir una línea de texto
    function addTexto($texto)
    {
        $texto .= "<br/>";
        $this->addContenido($texto);
    }
    function etiquetar($etiqueta, $contenido)
    {
        $temp = "<$etiqueta>\n";
        $temp .= " " . $contenido . "\n";
        $temp .= "</$etiqueta>";
        return $temp;
    }

    function addEtiqueta($etiqueta, $contenido)
    {
        $this->addContenido(
            $this->etiquetar(
                $etiqueta,
                $contenido
            )
        );
    }
}
?>