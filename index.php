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

echo("preguna#3 <br>");
$cantidadVendida = 5 ;
$costoNeto = 150000 ;
$totalCompra = ($cantidadVendida * $costoNeto) ;
$valordescuento=150000;
$descuento = 0.20;
$valorPagar = ($cantidadVendida * $costoNeto)-$valordescuento;


if ( $cantidadVendida == 3 ) {
  $valordescuento = $totalCompra * 0.10 ;
    $descuento = 10 ;
} else  if ( $cantidadVendida > 3 && $cantidadVendida <= 5 ) {
  $valordescuento = $totalCompra * 0.20 ;
    $descuento = 20 ;
} else  if ( $cantidadVendida > 5 ) {
  $valordescuento = $totalCompra * 0.40 ;
    $descuento = 40 ;
}
echo ( "Cantidad Vendida:" . $cantidadVendida .  "<br> Costo Neto:" . $totalCompra .
"<br> Descuento es:" . $descuento . "% <br> Valor del Descuento:" . $valordescuento . "<br> Valor a Pagar es:" . $valorPagar );


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


$usuario1="Merilian Mejia -"; 
$telefono1="5432189 -"; 
$direccion1= "Cr 50 a oeste # 100 - 76 -"; 
$salario1=3520000;

$usuario2="Meilyn Mejia -"; 
$telefono2="321997899 -"; 
$direccion2= "Cll 50  # 20 - 67-";  
$salario2=4580000;

$usuario3="Jorge Oñate -"; 
$telefono3="3236674849 -"; 
$direccion3= "Cr 20 a sur # 100 - 76 -"; 
$salario3=1250000;

$usuario4="Kaleth Morales -"; 
$telefono4="5432189 -"; 
$direccion4= "Cr 10 a sur # 100 - 32 -"; 
$salario4=3800000;

$usuario5="Silveltre Dangon -"; 
$telefono5="5432189 -"; 
$direccion5= "Cll 30 a  # 50 - 58 -"; 
$salario5=6490000;


echo "<br>";
echo $usuario1.$telefono1.$direccion1." $".$salario1."<br>";
echo $usuario2.$telefono2.$direccion2." $".$salario2."<br>";
echo $usuario3.$telefono3.$direccion3." $".$salario3."<br>";
echo $usuario4.$telefono4.$direccion4." $".$salario4."<br>";
echo $usuario5.$telefono5.$direccion5." $".$salario5."<br>";

$sumarSalario=($salario1+$salario2+$salario3+$salario4+$salario5);
$salarioSB=20000000;
$salarioSC=15000000;
echo "<br>";
if($sumarSalario>$salarioSB&&$sumarSalario>$salarioSC){

    echo"El mayor ingrso lo tiene la sucrusal A";
}
elseif($salarioSB>$sumarSalario&&$salarioSB>$salarioSC){
    echo"El mayor ingreso lo tiene la sucrusal B";
}
else
    echo"El mayor ingreso lo tiene la sucrusal C";




echo("<br>");
//pregunta 6

echo("pregunta 6 ");

$Numeros=array("2","4","6","8","10","12","14","16","18","20");
echo("<br>");
foreach($Numeros as $clave=> $valor)
{
    echo "<br> El Primer numero par es : ".$valor;
    
}


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

echo("<br>");
//pregunta 9
echo("<br>");
echo("pregunta 9 <br>");
echo("<br>");
$biotipo=biotipo(1.65);
echo("Para una altura de 1.65 su biotipo es: ".$biotipo);
echo("<br>");
$biotipo=biotipo(1.79);
echo("Para una altura de 1.79 su biotipo es: ".$biotipo);
echo("<br>");
$biotipo=biotipo(1.95);
echo("Para una altura de 1.95 su biotipo es: ".$biotipo);


echo("<br>");
//pregunta 10
echo("<br>");
echo("pregunta 10 <br>");

$jugadores=array(
    'jugador1'=> array('nombre'=>"Radamel Falcao",calcularEdad(1986,2020),'Posicion'=>"delantero", biotipo(1.76)),
        
    'jugador2'=>array('nombre'=>"James Rodriguez",calcularEdad(1991,2020),'Posicion'=>"Medio Campista",biotipo(1.81)),
        
    'jugador3'=>array('nombre'=>"Juan Cuadrado",calcularEdad(1988,2020),'Posicion'=>"delantero",biotipo(1.78)),
        
    'jugador4'=>array('nombre'=>"Yerri Mina",calcularEdad(1994,2020),'Posicion'=>"Defensor",biotipo(1.95)),
        
    'jugador5'=>array('nombre'=>"David Ospina",calcularEdad(1988,2020),'Posicion'=>"Arquero",biotipo(1.83)),
        
    'jugador6'=>array('nombre'=>"Davinson sanchez",calcularEdad(1996,2020),'Posicion'=>"Defensor",biotipo(1.87)),
        
    'jugador7'=>array('nombre'=>"Duvan Zapata",calcularEdad(1991,2020),'Posicion'=>"Delantero",biotipo(1.86)),
        
    'jugador8'=>array('nombre'=>"Wilmar Barrios",calcularEdad(1993,2020),'Posicion'=>"Medio Campista",biotipo(1.78)),
        
    'jugador9'=>array('nombre'=>"Mateos Uribe",calcularEdad(1991,2020),'Posicion'=>"Medio Campista",biotipo(1.80)),
        
);


foreach($jugadores as $clavesArreglosUnidimencionales=>$arreglosUnidimencionales){
    echo("<br>");
    echo($clavesArreglosUnidimencionales);
    echo("<br>");
    
    echo("<br>");

    foreach($arreglosUnidimencionales as $valor){
        
        echo($valor);
        echo("<br>");

    }

}















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
