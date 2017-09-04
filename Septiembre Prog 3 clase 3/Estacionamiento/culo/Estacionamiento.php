<?php

    require_once "Vehiculo.php";

class Estacionamiento
{
    private $_Columna_De_Autos;

    public function Estacionamiento()
    {
        $this->_Columna_De_Autos = array();
        
    }
    // si Guarda un auto, mete la fecha de hoy
    public function Guardar($listadeAutos,$auto)
    {
        array_push($listadeAutos,$auto);
        echo "Estoy Guardando";
    }
    

    public function ObtenerAuto()
    {
        return $this->_Columna_De_Autos;
    }

    // si esta saca el auto y devuelve el importe
    public function Sacar()
    {
        // mareo
         $archivo=fopen("Archivos/Facturados.txt","aa");

         $ahora=date("Y/m/d H:i:s");

         //continuar desde acá, fwrite? no estar perdido...
         
         // leer estacionados . txt

         // fread()
        fclose($archivo);
        echo "Estoy Sacando";
    }

}


?>