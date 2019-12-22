<?php

if(isset( $_GET['numeroUno']) && isset( $_GET['numeroDos'])){
    $num = $_GET['numeroUno'];
    $num2 = $_GET['numeroDos'];
    echo "$num mas $num2 es: ".($num + $num2).'<br/>';
    echo "$num menos $num2 es: ".($num - $num2).'<br/>';
    echo "$num por $num2 es: ".($num * $num2).'<br/>';
    echo "$num entre $num2 es: ".($num / $num2).'<br/>';
    echo "Residuo de $num entre $num2 es: ".($num % $num2).'<br/>';
}
else
    echo 'Introduce los numeros';