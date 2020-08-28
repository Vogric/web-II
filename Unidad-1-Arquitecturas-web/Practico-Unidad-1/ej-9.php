<?php

// (

if ( isset( $_POST['nombre'] ) && isset( $_POST['apellido'] ) && isset( $_POST['edad'] ) && $_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['edad'] != "" && isset( $_POST['submit'] ) && $_POST['submit'] != "" && isset( $_POST['argentina'] ) && $_POST['argentina'] != "" && isset( $_POST['interes'] ) && $_POST['interes'] != "" ) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $argentina = $_POST['argentina'];
    foreach ( $_POST['intereses'] as $interes );
    echo ( "Nombre: $nombre <br>" );
    echo ( "Apellido: $apellido <br>" );
    echo ( "Edad: $edad <br>" );
    echo ( "Genero: $genero <br>" );
    echo ( "País: $pais <br>" );
    echo ( "Interes elegido: $interes" );

} else {
    echo ( "Todos los campos deben estar completos" );
}

echo "<br>\n<pre>\$_POST = \n";
var_dump( $_POST );
echo "</pre>";

?>

<a href="ej-9.html">Inicio</a>