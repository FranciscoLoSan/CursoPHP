<?php
/* 
    *Para hablar de como definir una variable primero necesitamos saber cuales son
     los tipos que maneja php los cuales son los siguientes:
      *int / integer / bigInteger. Para números enteros.
      *float / double. Para números con punto decimal.
      *string.  Para cadenas de caracter.
    *Tambien hay tipos de datos compuesto
     *array. Collección de datos
     *objetos. Collección de datos definidos por el programador
    *
    *Para declarar una variable dentro de php se necesita preceder el identificador
     con un dolar, el identificador será el nombre de la variable. la sintaxis es la
     siguiente:
        $identificador;
    *En caso de que se necesite asignar un valor se debara poner el operador de 
     asignacion y despues su valor:
        $identificador = valor;
    *
    *Algo muy importante en php es que este es un lenguaje debilmete tipado, es 
     por esto mismo que cuando se declara una variable no se necesita especificar
     el tipo de la misma, como en otros lenguajes.

*/

//valirable nombre. su tipo es string y para asignarlo se necesita meter el valor entre comillas
$nombre = "Francisco";

var_dump($nombre);//Esta función nos ayuda a localizar la ubicacion de memoria y linea en la que 
                  //se encuentra en el código, además de su tipo y el tamño

//Para imprimir una variable es necesario concatenarla de la manera como se declaró, en este caso

//con comillas simples se imprime literalmente lo que se encuntre dentro de ellas

echo '<br/>$nombre';
//Asi es como se muestra la variable con el uso de comillas simples cuando hay concatenacion
echo '<br/>'.$nombre.'<br/>';
//Solo imprime el valor de la variable
echo $nombre;
//En este caso y como su funcion es esa, las comillas dobles detectan la variable e imprimen su valor

echo "<br/>Hola mi nombre es: $nombre López Sánchez";

$numeroEntero = 800;
$numeroDecimal = 3.1416;

var_dump($numeroEntero);
var_dump($numeroDecimal);

echo '<br/>'.'Numero entero con valor: '.$numeroEntero;
echo "<br/> Numero decimal con valor: $numeroDecimal";