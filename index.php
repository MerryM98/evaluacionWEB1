<?php

include('funciones.php');

echo("Merilian Mejia Palacio <br>");
echo("Punto 1<br>");

$numero1=40;
$numero2=50;


$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);

echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);

echo("<br>La Multiplicación de:".$numero1."*".$numero2."=".$multiplicacion); 

echo("<br>La división de:".$numero1."/".$numero2."=".$division);
echo("<br>");
//pregunta 2
echo("<br>");
echo("pregunta 2 <br>");
echo("<br>");

$peso=85;
$altura=1.78;
$imc=$peso/($altura*$altura);//IMC

if($imc<=18.4){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
        echo("su indice de masa corporal es: ".$imc."por lo tanto tiene bajo peso ");
}else if ($imc <=18.5 && $imc<=24.9){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
    echo("su indice de masa corporal es: ".$imc."por lo tanto tiene peso normal ");
}else if ($imc <=25 &&  $imc <=29.9 ){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
    echo("su indice de masa corporal es: ".$imc."por lo tanto tiene sobrepeso ");
}else if($imc<=30 && $imc<=34.9 ){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
    echo("su indice de masa corporal es: ".$imc."por lo tanto tiene  obecidad1 ");
}else if ($imc <= 35 && $imc<=39.9){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
    echo("su indice de masa corporal es: ".$imc."por lo tanto tiene obecidad2  ");
}else if  ($imc>=40 ){
    echo("Señor usuario su estatura es de: ". $altura. "y su peso es: ".$peso);
    echo("su indice de masa corporal es: ".$imc."por lo tanto tiene obecidad3  ");
}
echo("<br>");
//pregunta 3
echo("<br>");
echo("pregunta 3 <br>");
echo("<br>");


$cantidad=5;
$precio=150000;
$valorNeto=$cantidad*$precio;
$Descuento=$valorNeto*0.20;
$valorTotal=($cantidad*$precio)-$Descuento;
$ValorDescuento=$valorNeto*0.20;

if($cantidad=3){
    echo("Cantida vendida: ".$cantidad);
    echo("<br>");
            echo("Costo neto: ".$valorNeto);
            echo("<br>");
            echo("Descuento: ".$Descuento);
            echo("<br>");
            echo("valor del descuento : ".$ValorDescuento);
            echo("<br>");
            echo("Total a pagar: ".$valorTotal);
            echo("<br>");
}else if ($cantidad>5 && $cantidad<=5){
    echo("Costo neto: ".$valorNeto);
            echo("<br>");
            echo("Descuento: ".$Descuento);
            echo("<br>");
            echo("valor del descuento : ".$ValorDescuento);
            echo("<br>");
            echo("Total a pagar: ".$valorTotal);
            echo("<br>");
}else if ($cantidad>5){
    echo("Costo neto: ".$valorNeto);
            echo("<br>");
            echo("Descuento: ".$Descuento);
            echo("<br>");
            echo("valor del descuento : ".$ValorDescuento);
            echo("<br>");
            echo("Total a pagar: ".$valorTotal);
            echo("<br>");
}

echo("<br>");
//pregunta 4
echo("<br>");
echo("pregunta 4 <br>");
echo("<br>");

$CantidadHoras=36;
$valorHora=20000;
$salario=$CantidadHoras*$valorHora;
$valorHoraExtra=25000;
$salarioExtra=$CantidadHoras*$valorHoraExtra;

if($CantidadHoras=36){
    echo("para un total de 36 horas trabajadas, se obtiene un valor de hora de : ". $valorHora);
    echo("<br>");
    echo("El salario devengado a la semana es de  : ". $salario);
        
}else if ($CantidadHoras>40){
    echo("para un total de 36 horas trabajadas, se obtiene un valor de hora de : ". $valorHoraExtra);
    echo("<br>");
    echo("El salario devengado a la semana es de  : ". $salario);
}

echo("<br>");
//pregunta 5
echo("<br>");
echo("pregunta 5 <br>");
echo("<br>");


echo("<br>");
//pregunta 6
echo("<br>");
echo("pregunta 6 <br>");
echo("<br>");



echo("<br>");
//pregunta 7
echo("<br>");
echo("pregunta 7 <br>");
echo("<br>");

$salpicon=array('Dulce1'=>"Banano",'Dulce2'=>"Manzana",'Dulce3'=>"Durazno",'acido1'=>"piña",'acido2'=>"Naranja",'Acido3'=>"Lulo");
print_r($salpicon);

echo("<br>");
//pregunta 8
echo("<br>");
echo("pregunta 8 <br>");
echo("<br>");

$edad=calcularEdad(1991,2020);
echo("si usted nacio en 1991 usted tiene: ".$edad. " años");
echo("<br>");
$edad=calcularEdad(1995,2020);
echo("si usted nacio en 1995 usted tiene: ".$edad. " años");
echo("<br>");
$edad=calcularEdad(1987,2020);
echo("si usted nacio en 1987 usted tiene: ".$edad. " años");










// //switch($cantidad){
//     case"3":{
//         if($cantidad=3){
//             echo("Cantida vendida: ".$cantidad);
//             echo("Costo neto: ".$valorNeto);
//             echo("Descuento: ".$Descuento);
//             echo("valor del descuento : ".$ValorDescuento);
//             echo("Total a pagar: ".$valorTotal);
//         }
//     break;
//     }
//     case"5":{
//         if($cantidad>=3 || $cantidad<=5){
//             echo("Cantida vendida: ".$cantidad);
//             echo("Costo neto: ".$valorNeto);
//             echo("Descuento: ".$Descuento);
//             echo("valor del descuento : ".$ValorDescuento);
//             echo("Total a pagar: ".$valorTotal);
//         }

//     break;
//     }
//     case"5":{
//         if($cantidad>=3 || $cantidad<=5){
//             echo("Cantida vendida: ".$cantidad);
//             echo("Costo neto: ".$valorNeto);
//             echo("Descuento: ".$Descuento);
//             echo("valor del descuento : ".$ValorDescuento);
//             echo("Total a pagar: ".$valorTotal);
//         }

//     break;
//     }   
// }




?>
