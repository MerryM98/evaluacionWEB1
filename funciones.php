<?php

function calcularEdad($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    return ($edad);
}



//funcion pregunta 9 
function Biotipo($estatura){
    $biotipo="";
    if($estatura<1.70){
        $biotipo="Bajo";
    }
    else {
        if ($estatura>=1.70 && $estatura<=1.80) {
            $biotipo="Promedio";
        }
        else{
            $biotipo="Superior";
        }
    }
    return $biotipo;
}









?>