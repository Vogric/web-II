<?php

if ( isset( $_GET['nombre'] ) && isset( $_GET['apellido'] ) && $_GET['edad'] && $_GET['nombre'] != "" && $_GET['apellido'] != "" && $_GET['edad'] != "" ) {

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    echo ( "Nombre: $nombre" );
    echo ( "Apellido: $apellido" );
    echo ( "Edad: $edad" );

} else {
    echo ( "Todos los campos deben estar completados" );
}

?>

<a href="ej-3get.html">Inicio</a>