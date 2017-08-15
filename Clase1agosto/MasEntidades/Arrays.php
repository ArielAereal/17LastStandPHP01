<?php

$Hellarray = ["A","Z","7",4,5];



foreach ($Hellarray as $dato)
    {// si es un aray, recorrerlo
        echo "<br> $dato";
    }

array_push($Hellarray,"Macrigato");
array_push($Hellarray,$Hellarray);

/*echo ('<pre>');
var_dump($Hellarray);
echo ('</pre>');*/

?>