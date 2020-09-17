<?php

$db=new PDO( 'mysql:host=localhost;' .
             'dbname=db_deudas_tp3_ej3;charset=utf8', 
             'root', '' );

// TODO: consulta
// TODO: fetch

$salida='<table>';

// Cabeceras fijas por ahora
$salida .= '<tr><th>id</th><th>nombre</th><th>profesor</th></tr>';

$_MAX_ROWS=6; // Esto lo tomará del fetch
for ( $row = 1; $row <= $MAX_ROWS; $row++ ) {
    $salida .= '<tr>';

    // Soĺo muestro números por ahora
    $salida .= "<td>id $row</td>";
    $salida .= "<td>nombre $row</td>";
    $salida .= "<td>profesor $row</td>";
    
    $salida .= "</tr>\n";
}
$salida .= '</table>';
echo $salida;
