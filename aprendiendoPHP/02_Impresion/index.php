<?php
/*
    *Para poder mostrar informacion, frases o intrucciones al usario se necesecita
     de la palabra clave del lenguaje "echo" acompañado de comilla simples o dobles
*/

echo 'Impresión por php';

/*
    *Dentro de echo también se pueden imprementar tags html, las cuales cumpliran la
     misma tarea que en un archivo html original, por ejemplo, un h1 dentro de un echo 
     hará los mismo que en un archivo nativo de html.
*/

echo '<h1>Implementando tags html dentro de echos</h1>';
//como se puede observar, es la misma sintaxis que en html

/*
    *Para concatenar frases o variables dentro de la cadena que será mostrada al 
     usuario es necesario usar el operador de concatenación. Este debe ir precedida de
     la ultima comilla simple de la frase. Si se quiere  agregar otra frase o variable
     después de una concatenacion se debe de hacer lo mismo cuantas veces sea necesario.
    *sintaxis: 
     echo '[frase]'.[$variable].'[frase]';
*/
echo '<br/>'.'Aquí se concateno un espacio con esta frase';

/*
    *Si bien se mencionó del uso de comillas dobles, ¿Por qué hasta el momento?
     no se ha hecho uso de ellas en los ejemplos?
     Esto es asi ya que las comillas dobles implican un proceso mas largo ya que
     revisan que la cadena que se esta imprimiendo no vaya acompañada de variables
     o caracteres especiales. En resumen, reducen el rendimiento gracias a una mayor
     toma de recursos para hacer la revision, aun que no se nota mucha diferencia en
     aplicaciones pequeñas esto puede cambiar en apliaciones grandes.
*/

echo "<br/>Las comillas dobles ('' '') pueden cumplir con la misma tarea que las simples (' ')";

