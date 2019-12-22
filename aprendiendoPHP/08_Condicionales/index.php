<?php
/*
    Un condicional es aquel que apartir de una comparación de un valor dado
    ejecuta una u otra cosa. Los condicionales son if, else, elseif y una
    estructura llamada switch.

*/

$nombre = "Juan";

if($nombre == "Francisco")
    echo "Bienvenido $nombre";/*El if es el primer condicional, si la variable tine el mismo valor
    al que se esta comparando con el uso del operador logico entonces se ejecutan 
    las intrucciones, si solo es una entonces no es necesario poner llaves, 
    si son mas de una intrucción se debera agregarlas.
  */

echo '<hr/>';
if($nombre == "Francisco"){
    $edad  = 19;
    echo "Bienvenido $nombre";
    echo '<br/>Tienes: '.$edad.' años';
}
else{
    echo 'No sabemos quien eres';
    echo '<br/>Por favor registrate';//else se utiliza para ejecutar otras acciones si no se cumple
                                     //la condicion en el if
}

$dia = 3;

if($dia == 1){
    echo '<h1>Es lunes<h1/>';
}
else{
    if($dia == 2){
        echo '<h1>Es martes<h1/>';
    }
    else{
        if($dia == 3){
            echo '<h1>Es miercoles<h1/>';
        }
        else{
            if($dia == 4){
                echo '<h1>Es jueves<h1/>';
            }
        }
    }
}
//Esto se le conoce como if-else anidado, pero se puede arreglar con la intrucción elseif:
$dia = 4;
if($dia == 1){
    echo '<h1>Es lunes<h1/>';
}
elseif($dia == 2){
    echo '<h1>Es martes<h1/>';
}
elseif($dia == 3){
    echo '<h1>Es miercoles<h1/>';
}
else{
    echo '<h1>Es Jueves<h1/>';//este tipo de anidación, sí ya no hay elementos que comparar
                              //se termina con un else
}
/* 
    El switch es una estructura condicinal, en el que se pasa el valor de la variable como parametro
    y hace comparaciones por cada caso que haya, si el valor coincide con algún caso dentro de la estructura
    entonces se ejecutaran las intrucciones que contenga el caso. Para finalizar con las intrucciones del caso 
    y no se produscan bucles se usa la sentencia [break]
*/
$dia = 6;
switch($dia){
    case 1:
        echo '<h1>Es lunes<h1/>';
        break;
    case 2:
        echo '<h1>Es martes<h1/>';
        break;
    case 3:
        echo '<h1>Es miercoles<h1/>';
        break;
    case 4:
        echo '<h1>Es jueves<h1/>';
        break;
    case 5:
        echo '<h1>Es viernes<h1/>';
        break;
    case 6:
        echo '<h1>Es sabado<h1/>';
        break;
    case 7:
        echo '<h1>Es domingo<h1/>';
        break;
}