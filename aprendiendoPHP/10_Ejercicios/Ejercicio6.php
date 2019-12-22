<?php

echo '<table border="1">';

echo '<thead>';//Abre la cabecera de una tabla
echo '<tr>';//hace la fila donde se imprimiran datos

for($i  = 0; $i <= 15; $i++){
    echo '<th>'. $i. '</th>';//Escribe los elementos en celdas que seran la cabecera, aparecerán en negritas <th>
}

echo '</tr>';
echo '</thead>';

echo '<tbody>';//Señala el cuerpo de la tabla
echo '<tr>';//Fila

for($i = 0; $i <= 15; $i++){
    echo '<td>';//Hace las celdas para imprimir los datos en cada fila
    for($j = 0; $j <= 10; $j++){
        echo "$i X $j = ".($i * $j);
        echo '<br/>';
    }
    echo '</td>';
}

echo '</tr>';
echo '</tbody>';

echo '</table>';