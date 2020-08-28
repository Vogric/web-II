<?php

if ( empty( $_POST) ){    
    echo('<p>ERROR: No se recibieron datos</p>');
}
// Haciendo pruebas desde el form:
//   genero y pais: si están seteados, nunca estarán vacíos
//   intereses: El arreglo  estará sin setear cuando el usuario
//              no haya elegido ningún interés
//
// Pero para genero y pais, se debería validar que los valores sean 
// los esperados. ie: modificación de values desde el browser ¡con el Inspector!
//
// Creo que este sería un punto por el cual el HTML debería ser generado 
// dinámicamente con sus forms y todo. De esa manera habrá un solo lugar
// con el código de los valores correctos para pais y genero, por ejemplo.
elseif ( !empty( $_POST['nombre'] ) && !empty( $_POST['apellido'] ) && 
         !empty( $_POST['edad'] ) && isset( $_POST['genero'] ) && 
         isset( $_POST['pais'] ) 
         ) {
        
    // Primero guardo los datos recibidos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $pais = $_POST['pais'];

    // De acuerdo a si está seteada la key 'intereses' la tomamos
    // o creamos un arreglo vacío
    $intereses = isset( $_POST['intereses'] )? $_POST['intereses'] : array();


    // Luego, muestros desde los datos guardados
    echo ( "<h1>Datos recibidos y validados</h1>" );
    echo ( "<ul>" );

    echo ( "<li>Nombre: $nombre</li>" );
    echo ( "<li>Apellido: $apellido</li>" );
    echo ( "<li>Edad: $edad</li>" );
    echo ( "<li>Género: $genero</li>" );
    echo ( "<li>País: $pais</li>" );
    echo ( "<li>Intereses: " );

    // $intereses es un caso especial
    if( count( $intereses ) == 0 ) {
        echo( "ninguno</li>" ); // Cierro el li cuando no hay intereses
    }
    else {  // O armo una sublista cuando hay uno o más
        echo ( "</li><ul>" );
        foreach ($intereses as $interes) {
            echo("<li>$interes</li>");
        }
        echo ( "</ul>" );
    }

    echo ( "</ul>" );
}
else {
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

    if ( !isset( $_POST['genero'] ) ) {
        echo ( "<li>Género no fue elegido</li>\n" );
    }

    if ( !isset( $_POST['pais'] ) ) {

        echo ( "<li>País no está seteado</li>\n" );
    }

    echo ( "</ul>" );
}

// echo "<br>\n<pre>\$_POST = \n";
// var_dump( $_POST );
// echo "</pre>";

?>
<p>
    <a href="ej-09-form-avanzado.html">Volver al formulario</a>
</p>