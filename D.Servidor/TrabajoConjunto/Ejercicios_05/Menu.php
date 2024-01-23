<?php
    abstract class Menu{
        protected static $items = [
            ["Google","https://www.google.com/"],
            ["Drive","https://drive.google.com/drive/"],
            ["Docs","https://docs.google.com/"]
        ];
        abstract public function mostrar();        
    }

    class MenuVertical extends Menu{
        public function mostrar(){
            foreach (self::$items as $item){
                echo '<a href="' . $item[1] . '">' . $item[0] . '</a><br>';
            }
        }
    }

    class MenuHorizontal extends Menu{
        public function mostrar(){
            echo '<span> | </span>';
            foreach (self::$items as $item){
                echo '<a href="' . $item[1] . '">' . $item[0] . '</a><span> | </span>';
            }
        }
    }