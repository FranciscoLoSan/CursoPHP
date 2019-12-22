<?php
/* 
    El metodo POST nos ayuda a pasar todos los datos por la url http ocultos,
    recibidos de cualquier formulario.
    
    La variable $_POST nos ayuda a recuperar los datos recibidos del formulario.
    Al formulario se le pone el nombre de cada variable indece perteneciente al 
    arreglo, entoces si en el formulario se recibe tres campos,tres campos tendra 
    el arreglo con el mismo nombre asignado en el formulario
*/
echo '<h1>Datos recibidos del formulario Post<h1/>';

echo '<h2>Nombre Usuario: '.$_POST['nombre'].'<h2/>';
echo '<h2>Apellido paterno Usuario: '.$_POST['apellidoP'].'<h2/>';
echo '<h2>Apellido materno Usuario: '.$_POST['apellidoM'].'<h2/>';

var_dump($_POST);