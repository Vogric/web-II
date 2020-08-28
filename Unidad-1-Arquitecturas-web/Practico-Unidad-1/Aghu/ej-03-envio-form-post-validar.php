<?php

if ( empty( $_POST) ){
    echo('<p>ERROR: No se recibieron datos</p>');
}
elseif ( !empty( $_POST['nombre'] ) && !empty( $_POST['apellido'] ) && 
         !empty( $_POST['edad'] ) ) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    echo ( "<h1>Datos recibidos y validados:</h1>" );
    echo ( "<ul>" );

    echo ( "<li>Nombre: $nombre</li>" );
    echo ( "<li>Apellido: $apellido</li>" );
    echo ( "<li>Edad: $edad</li>" );

    echo ( "</ul>" );

} else {
    echo ( "<p>ERROR: Todos los campos deben estar completados</p>" );

    // Hilando fino:
    echo ( "<ul>" );

    if ( isset( $_POST['nombre'] ) ) {

        if ( empty( $_POST['nombre'] ) ) {
            echo ( "<li>Nombre está vacío</li>\n" );
        }
    } else {
        echo ( "<li>Nombre no está seteado</li>\n" );
    }
    
    if ( isset( $_POST['apellido'] ) ) {

        if ( empty( $_POST['apellido'] ) ) {
            echo ( "<li>Apellido está vacío</li>\n" );
        }
    } else {
        echo ( "<li>Apellido no está seteado</li>\n" );
    }
    
    if ( isset( $_POST['edad'] ) ) {

        if ( empty( $_POST['edad'] ) ) {
            echo ( "<li>Edad está vacío</li>\n" );
        }
    } else {
        echo ( "<li>Edad no está seteado</li>\n" );
    }
    echo ( "</ul>" );
    
}

?>
<p><a href="ej-03-envio-form-post.html">Volver al formulario</a></p>