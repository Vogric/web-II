<?php
require_once "sumar.php";
require_once "pi.php";
require_once "about.php";

//suma/1/2
$action = $_GET["action"];

if ( $action == '' ) {
    echo GetAbout( null );
} else {
    if ( isset( $action ) ) {
        //["suma","1","2"]
        $partesURL = explode( "/", $action );

        if ( $partesURL[0] == "sumar" ) {

            echo GetSumar( $partesURL[1], $partesURL[2] );

        } elseif ( $partesURL[0] == "pi" ) {

            echo GetPi();

        } elseif ( $partesURL[0] == "about" ) {

            if ( isset( $partesURL[1] ) ) {
                echo GetAbout( $partesURL[1] );

            } else {
                echo GetAbout( null );
            }
        }
    }
}