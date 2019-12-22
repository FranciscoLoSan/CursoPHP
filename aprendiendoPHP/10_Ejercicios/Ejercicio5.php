<?php

if(isset($_GET['numeroUno']) &&isset($_GET['numeroDos'])){
    $num = $_GET['numeroUno'];
    $num2 = $_GET['numeroDos'];

    if($num < $num2){
        for($i = $num; $i <= $num2; $i++){
            echo $i.'<br/>';
        }
    }
    else 
        echo 'Recuerda que el primer numero debe de ser menor al segundo, ingresa numeros nuevamente<br/>';
}

else 
    echo 'Ingresa dos numeros<br/>';