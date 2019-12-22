<?php


/*
    Las constantes también son espacios de mamoria donde definiremos un valorm, pero
    a diferencia de las variables estas no cambian de valor en toda la ejecución del
    programa
*/

//Así se define una constante
define("Usuario", "Francisco");

echo Usuario;

define("edad", 25);

echo '<br/>'.edad;

echo '<br/>'.'Tu nombre de usuario es: '.Usuario.' y tienes: '.edad.' años';

echo '<br/>'.var_dump(edad);
/*Si la constante es llamada entre las comillas, ya sean dobles o simples, estas la interpretarán
  como una cadena y no como un valor, se imprimira literalmente el nombre en vez del valor 
*/
echo "edad";
/*
    Como se puede observar estas se declaran con la función "define", donde el primer 
    parametro que recibe es el nombre y el sugundo paramtro es el valor

    define("parametro 1", parametro 2);
    define("Usuario", "Valor");

    el valor se encerrará entre comillas dependiendo del tipo, si este es entero o decimal
    solo ira el valor que se le dará, si este es un string irá encerrado entre comillas.

    Para llamar a una constante, a diferencia de una variable, esta solo será llamada con su
    nombre sin tener que poner el símbolo de dolar antecediendo su nombre
*/