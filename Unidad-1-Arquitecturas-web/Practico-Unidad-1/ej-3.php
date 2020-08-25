<?php

if ( isset( $_POST['nombre'] ) && isset( $_POST['apellido'] ) && $_POST['edad'] && $_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['edad'] != "" ) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    echo ( "Nombre: $nombre" );
    echo ( "Apellido: $apellido" );
    echo ( "Edad: $edad" );

} else {
    echo ( "Todos los campos deben estar completados" );
}

?>

<a href="ej-3.html">Inicio</a>