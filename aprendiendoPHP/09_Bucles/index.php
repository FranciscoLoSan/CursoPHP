<?php
/*
    Los bucles son estructuras repetitivas, repiten al menos una o muchas instrucciones
    apartir de un valor incial que debe estar evaluandose cada vez que cambie cierto valor
    y termina a partir de que una condición se cumpla.

    Los bucles existentes en php son los siguientes:
    while
    do while 
    for
*/

/*
    Para el bucle while repite todas las instrucciones dentro de su bloque apartir de una,
    condición se evalua primero y luego da paso con las mismas. También para que sea siclico
    se de be de ir cambiando el valor inicial (contador) que será comparado con la condición 
    y tener mucho cuidado que cambie y tenga un valor final de la misma sí no se haria infinito.
*/

$i = 1;

//Bucle while
while($i <= 20)//Condición 
{   
    $numero = $_GET['num'];
    $resultado = $numero * $i;
    echo "El resultado de $numero * $i es igual a: $resultado<br/>";

    $i++;//Contador
}
/*
    El bucle do while es parecido al bucle while solo que este primero hace el bloque de intrucciones
    para despues compara el contador con la condición, hace ciclos hasta que el contador ya no cumpla 
    con la condicion
*/
$resultado;
do{
    $i++;
    $resultado = $resultado + $i;

}while($i <=100);

echo "La suma de los primero 100 numeros, de uno a cien, es: $resultado";

/*
    En el bucle for la condición, el incremento y la decraración se hacen en una 
    sola sentencia, pero el funcionamiento es parecido a los dos bucles antes presentados
*/

for($j = 1; $j <= 500; $j++)
{
    echo "$j <br/>";
}