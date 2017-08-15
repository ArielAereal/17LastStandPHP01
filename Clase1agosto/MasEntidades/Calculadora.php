<?php

/**
 * como bajo un nivel? en rutas de archivo

 include "/../../../";

 */

include "/../../Clase1agosto/Validador/Validar.php";

class Calculadora
{
    public static function Multiplicar($un,$do)
    {
        echo $un*$do;
    }

    function __construct()
    {

        # code...
    }

    public function Dividir($un,$do)
    {

        if(Validar::EsCero($un) == true)
            {
            echo "Se puede dividir pero da cero";
            }    
        else
            {
             if(Validar::EsCero($do) == true)
                {
                echo "Nose puede dividir por cero";
                }
             else
                {
                echo $un/$do;
                }
        }
         
    }
    
}


?>