<?php
/*
    Las super globales son variables que se puden implementar en cualquier archivo
    php, estas solo necesitan ser declaradas para llamarlas ya que su valor consiste 
    mucho del entorno de desarrollo. Las superGlobales tienen el siguient formato
    $_[Nombre]

    se usa para recuperar información o en su defecto establecer cierto comportamiento
    como lo es [$_COOKIE]
*/
echo '<h1> Nombre de servidor: '.$_SERVER['SERVER_NAME'].'<h1/>';//Da el nombre del servidor
echo '<h2>Dirección de servidor: '.$_SERVER['SERVER_ADDR'].'<h2/>';//Da la dirección del servidor
echo '<h2>Software que se utiliza: '.$_SERVER['SERVER_SOFTWARE'].'<h2/>';
echo '<h2>Navegador utilizado: '.$_SERVER['HTTP_USER_AGENT'].'<h2/>';
echo '<h2>Dirección del cliente: '.$_SERVER['REMOTE_ADDR'].'<h2/>';