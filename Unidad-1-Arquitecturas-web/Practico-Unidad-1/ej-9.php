<?php

if ( !empty( $_POST['nombre'] ) && !empty( $_POST['apellido'] ) && !empty( $_POST['edad'] )
    && isset( $_POST['genero'] ) &&
    isset( $_POST['pais'] ) ) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];
    $intereses = isset( $_POST['intereses'] ) ? $_POST['intereses'] : array();

    echo ( "Nombre: $nombre <br> Apellido: $apellido <br> Edad: $edad <br>
    Genero: $genero <br> País: $pais <br>" );

    foreach ( $intereses as $interes ) {
        echo ( "$interes <br>" );
    }

} else {
    echo ( "Todos los campos deben estar completos" );
}

?>

<br>
<a href="ej-9.html">Inicio</a>