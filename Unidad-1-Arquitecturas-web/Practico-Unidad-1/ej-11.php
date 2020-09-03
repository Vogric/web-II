<h1>Ejercicio 3</h1>
<!--/ej-3get.php?nombre=asd&apellido=asd&edad=12 -->


<?php
echo ( '<ul>' );
if ( isset( $_POST['cantidad'] ) ) {
    $cantidad = $_POST['cantidad'];
} else {
    $cantidad = 150;
}
if ( $cantidad == "all" ) {
    $cantidad = 150;
}
for ( $i = 1; $i <= $cantidad; $i++ ) {
    $cadena = ( "<li> Item $i </li>" );
    echo ( $cadena );
}
echo ( '</ul>' );

var_dump( $_POST );
?>