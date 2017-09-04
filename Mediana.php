<?php
// anda en localhost/sept/

$Numero_1;
$Numero_2;
$Numero_3;

// El php es sensible a las mayúsculas

$Numero_1 = rand(-12,54);
$Numero_3 = rand(-12,54);
$Numero_2 = rand(-12,54);

$Numero_1 = 5;
$Numero_2 = 5;
//$Numero_3 = 5;
echo "Nivel 1-3. - Mediana Mejorada<br> <br> <br>";

/*echo "<br><br> Números Salazar 1:  $Numero_1";

echo "<br> <br>Números Salazar 2:  $Numero_2";

echo "<br> <br>Números Salazar 3:  $Numero_3";

echo "<br> <br> Implementación: ";*/

echo "Con Tres de esos números,<br>determino el más centradito de todos: <br> <br>";

echo Delmedio($Numero_1,$Numero_2,$Numero_3);

function Delmedio($num1,$num2,$num3)
    {
        
        // pensar el ordenar un array y devolver el del medio...
        // lo hice en el otro, pero no se por qué no me anduvo en este

        $eifel = array($num1,$num2,$num3);

        if($num1!==$num2&&$num1!==$num3&&$num2!==$num3)
        {
            $normalmedio;
        foreach ($eifel as $value) {
            
            if ($value !==ComparoMenor(ComparoMenor($num1,$num2),$num3)&&$value!==ComparoMayor(ComparoMayor($num1,$num2),$num3))
                {$normalmedio = $value;}

        
        }
        return $normalmedio;
        } else {
            echo "Algún número anda duplicado<br><br>";
            // este if podría ser el primero
            if ($num1==$num2&&$num2==$num3) {
                echo "TODOS LOS NÚMEROS SON DELMEDIO!!!!";
            } else {
                echo "NO HAY MEDIO DE A PARES!?!?!?!?<br><br>";

                echo "EL MENOR: ".ComparoMenor(ComparoMenor($num1,$num2),$num3)."<br>";

                echo "EL MAYOR: ".ComparoMayor(ComparoMayor($num1,$num2),$num3)."<br>";


            }


        }

        

    }   

function ComparoMenor($NumeroUno,$NumeroDos)                             
    {
        $salida = $NumeroUno;

        if($NumeroUno==$NumeroDos)
            {
                echo "Se han encontrado Gemelos Idénticos: $NumeroDos <br><br>";
            }        
        else if ($NumeroUno>$NumeroDos)
            {
                $salida = $NumeroDos;
            }

        return $salida;    
    }

    function ComparoMayor($NumeroUno,$NumeroDos)                             
    {
        $salida = $NumeroUno;

        if($NumeroUno==$NumeroDos)
            {
                echo "Se han encontrado Gemelos Idénticos: $NumeroDos <br><br>";
            }        
        else if ($NumeroUno<$NumeroDos)
            {
                $salida = $NumeroDos;
            }

        return $salida;    
    }
?>