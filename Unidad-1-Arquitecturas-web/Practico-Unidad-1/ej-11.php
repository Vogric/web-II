<h1>Ejercicio 3</h1>
<!--/ej-3get.php?nombre=asd&apellido=asd&edad=12 -->


<?php

$arreglo = array();
define( "MAX", "150" );

for ( $i = 0; $i < MAX; $i++ ) {
    $arreglo[$i] = $i;
}

echo ( '<ul>' );
if ( isset( $_POST['cantidad'] ) ) {
    $cantidad = $_POST['cantidad'];
} else {
    $cantidad = MAX;
}
if ( $cantidad == "all" ) {
    $cantidad = MAX;
}
for ( $i = 0; $i < $cantidad; $i++ ) {
    $cadena = ( "<li> Item $arreglo[$i] </li>" );
    echo ( $cadena );
}
echo ( '</ul>' );

var_dump( $_POST );
?>