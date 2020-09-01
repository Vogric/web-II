<?php

define('MAX','150');

// Construyo un arreglo de 150 cuadrados
$arreglo = array();
for ( $i = 1; $i <= MAX; $i++ ) {    
    array_push( $arreglo, $i**2 ); // ** es la potenciación/ exponenciación
}


echo ( '<ul>' );
if ( isset( $_POST['cantidad'] ) && $_POST['cantidad'] != 0 ) {
    $cantidad = $_POST['cantidad'];
} else {
    $cantidad = count($arreglo); //Tomar total del arreglo
}
for ( $i = 0; $i < $cantidad; $i++ ) {
    $cadena = ( "<li> Item $i valor " . $arreglo[$i] . "</li>" );
    echo ( $cadena );
}

echo ( '</ul>' );
?>