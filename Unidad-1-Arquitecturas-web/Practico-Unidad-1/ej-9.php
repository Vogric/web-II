<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$pais = $_POST['pais'];
foreach ( $_POST['intereses'] as $interes );

if ( !empty( $_POST['nombre'] ) && !empty( $_POST['apellido'] ) && !empty( $_POST['edad'] )
    && isset( $_POST['genero'] ) &&
    isset( $_POST['pais'] ) ) {

    echo ( "Nombre: $nombre <br> Apellido: $apellido <br> Edad: $edad <br>
    Genero: $genero <br> País: $pais <br> Interes elegido: $interes" );

} else {
    echo ( "Todos los campos deben estar completos" );
}

?>

<br>
<a href="ej-9.html">Inicio</a>