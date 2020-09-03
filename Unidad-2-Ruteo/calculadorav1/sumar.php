<?php

function sumar( $a, $b )
{
    return $a + $b;
}

function GetSumar( $a, $b )
{
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Andre</title>
        <!-- Comentario -->
    </head>
    <body>';

    if ( isset( $a ) && isset( $b ) ) {
        $result = sumar( $a, $b );
        $html .= "<h2> Cuenta = " . $a . " + " . $b . "</h2>";
        $html .= "<h2> Resultado:  " . $result . "</h2>";
    } else {
        $html .= "<h2> Valores vacios</h2>";
    }

    $html .= '</body>
    </html>';

    return $html;
}