<?php
/*
    El metodo get nos permite pasar todos los datos recibidos de un formulario
    , pero a comparición del metodo post estos se visualizan en la url

    La variable $_GET nos ayuda a recuperar los datos recibidos atravez del
    formulario. Al formulario se le pone el nombre de cada variable indece 
    perteneciente al arreglo, entoces si en el formulario se recibe tres campos,
    tres campos tendra el arreglo con el mismo nombre asignado en el formulario
*/
echo '<h1>Datos recibidos del formulario get<h1/>';

echo '<h2>Nombre Usuario: '.$_GET['nombre'].'<h2/>';
echo '<h2>Apellido paterno Usuario: '.$_GET['apellidoP'].'<h2/>';
echo '<h2>Apellido materno Usuario: '.$_GET['apellidoM'].'<h2/>';

var_dump($_GET);