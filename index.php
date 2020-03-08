<?php
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

//pregunta 2
echo("<br>");
echo("pregunta 2 <br>");

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

//pregunta 3
echo("<br>");
echo("pregunta 3 <br>");
echo("<br>");


$cantidad=5;
$precio=150000;
$Descuento=$valorNeto*0.20;
$ValorDescuento=$valorNeto*0.20;
$valorNeto=$cantidad*$precio;
$valorTotal=($cantidad*$precio)-$Descuento;


switch($Descuento){
    case'descuento'

}

// //if($cantidad=3){
//         $cantidad*0.40;
//         echo("la cantida vendida es de: ". $cantidad);
//         echo("<br>");
//         echo("Costo neto: ".$valorNeto);
//         echo("<br>");
//         echo("Descuento : ".$Descuento);
//         echo("<br>");
//         echo("Valor del Descuento : ".$ValorDescuento);
//         echo("<br>");
//         echo("Valor total a pagar : ".$valorTotal);
        
// }else if ($cantidad=5){
//     echo("la cantida vendida es de: ". $cantidad);
//         echo("<br>");
//         echo("Costo neto: ".$valorNeto);
//         echo("<br>");
//         echo("Descuento : ".$Descuento);
//         echo("<br>");
//         echo("Valor del Descuento : ".$ValorDescuento);
//         echo("<br>");
//         echo("Valor total a pagar : ".$ValorDescuento);
// }else if ($imc <=25 &&  $imc <=29.9 ){
//     echo("la cantida vendida es de: ". $cantidad);
//         echo("<br>");
//         echo("Costo neto: ".$valorNeto);
//         echo("<br>");
//         echo("Descuento : ".$Descuento);
//         echo("<br>");
//         echo("Valor del Descuento : ".$ValorDescuento);
//         echo("<br>");
//         echo("Valor total a pagar : ".$ValorDescuento);

// }
                
            
        
        
     





?>
