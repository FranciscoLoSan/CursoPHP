<?php
/*
    *En php, como en la mayoria de lenguajes de programación, hay operadores
     de aritmeticos y logicos. Los operadores aritmeticos nos sirven para 
     hacer operaciones sobre variables y los logicos para hacer comparaciones
     sobre las variables:

     *Operadores aritmeticos:
            + se usa para sumar
            - se usa para restar
            * se usa para multiplicar
            / se usa para dividir
            % se usa para dar el resto de un cociente

            ++ Para incrementar la variable
            += deriba del operador de incremento
            -- Para decrementar la variable
            -= deriba del operador de decremento

    *Operadores lógicos:
            <   menor que
            >   mayor que
            <=  menor o igual que
            >=  mayor o igual que
            ==  igual que
            === identico que
            !=  diferente de 
*/

$numero1 = 45;
$numero2 = 25;


echo 'Suma de 45 + 25 es: '.($numero1 + $numero2).'<br/>';
echo 'Resta de 45 - 25 es: '.($numero1 - $numero2).'<br/>';
echo 'Multiplicación de 45 * 25 es: '.($numero1 * $numero2).'<br/>';
echo 'División de 45 / 25 es: '.($numero1 / $numero2).'<br/>';
echo 'Resto de 45 y 25 es: '.($numero1 % $numero2);

$resultado1 = $numero1 + $numero2;
echo '<hr/>';
echo 'Suma de 45 + 25 es: '.$resultado1.'<br/>';

$resultado2 = $numero1 - $numero2;

echo "<br/>La resta de 45 - 25 es: $resultado2";

define("total", $resultado1 + $resultado2);

echo '<br/>Esto es una constante que es la suma de los dos resultados anteriores, el valor de: '.total.'.
      NUNCA cambiara de valor en toda la ejecución';