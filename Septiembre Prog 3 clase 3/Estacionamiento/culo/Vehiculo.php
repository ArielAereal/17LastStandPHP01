<?php

class Vehiculo
{
    
    private $_patente;    
    private $_fecha;

   public function Vehiculo($_pat)
    {
        $this->_patente=$_pat;
    }

    public function ObtenerPatente()
    {   
        //aqui el get
        return $this->_patente;
    }

    public function EstablecerPatente($lapat)
    {
        $this->_patente = $lapat;
    }

    public function Fecha($_fach)
    {
        $this->_fecha = $_fach;

        return $this->_fecha;
    }
}


?>