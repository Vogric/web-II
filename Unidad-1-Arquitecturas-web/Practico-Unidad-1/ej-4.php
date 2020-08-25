<h1>Ejercicio 3</h1>
<!--/ej-3get.php?nombre=asd&apellido=asd&edad=12 -->


<a href="ej-4.php?cantidad=5">Ver los primeros 5</a>
<a href="ej-4.php?cantidad=20">Ver los primeros 20</a>
<a href="ej-4.php?cantidad=100">Ver los primeros 100</a>
<a href="ej-4.php">Ver todos</a>

<?php
echo ( '<ul>' );
if ( isset( $_GET['cantidad'] ) ) {
    $cantidad = $_GET['cantidad'];
} else {
    $cantidad = 150;
}
for ( $i = 1; $i <= $cantidad; $i++ ) {
    $cadena = ( "<li> Item $i </li>" );
    echo ( $cadena );
}

echo ( '</ul>' );
?>