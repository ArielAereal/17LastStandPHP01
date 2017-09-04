<?php

require_once "Estacionamiento.php";
$auto = new Vehiculo("ABC 123");

// buen dato, el var dump para ver que esta pasando aca quenoanda
//var_dump($auto);
$accion = "Guardar";
    // accion sacar, pero hacerlo bien
$accion = null;

$Miest = new Estacionamiento();

if ($accion == "Guardar")
    {
        // ver algo que me olvidé...
        // organizar el material de abajo en la clase que 
        // corresponde (est.|)
        $Miest->Guardar($Miest->ObtenerAuto(),$auto);


        // ruta de archivo, segundo parametro aa
        $archivo=fopen("Archivos/Estacionados.txt","aa");
                $ahora=date("Y/m/d H:i:s");
        fwrite($archivo,$auto->ObtenerPatente()."-".$auto->Fecha($ahora)."\r\n");



        fclose($archivo);
    }
else
    {   
        echo "Estamos trabajando para ofrecer un mejor servicio<br><br>Disculpe las molestias ocasionadas";
        //Estacionamiento::Sacar($auto);
    }
?>