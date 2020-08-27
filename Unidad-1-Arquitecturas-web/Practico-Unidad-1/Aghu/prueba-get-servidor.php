<?php
    echo( "<h1>Pruebas de <code>empty</code> y <code>isset</code></h1>\n");
    if(empty($_GET)){
        echo("\$_GET is empty<br>\n");
    }
    else {
        echo("\$_GET is not empty<br>\n");
    }  

    if(empty($_GET['nombre'])){
        echo("nombre is empty<br>\n");
    } 
    else {
        echo("nombre is not empty<br>\n");
    }
    if(isset($_GET['nombre'])){
        echo("nombre está seteado<br>\n");
    } 
    else {
        echo("nombre no está seteado<br>\n");
    }
    if(empty($_GET['apellido'])){
        echo("apellido is empty<br>\n");
    } 
    else {
        echo("apellido is not empty<br>\n");
    }
    if(isset($_GET['apellido'])){
        echo("apellido está seteado<br>\n");
    } 
    else {
        echo("apellido no está seteado<br>\n");
    }
    if(empty($_GET['edad'])){
        echo("edad is empty<br>\n");
    } 
    else {
        echo("edad is not empty<br>\n");
    }
    if(isset($_GET['edad'])){
        echo("edad está seteado<br>\n");
    } 
    else {
        echo("edad no está seteado<br>\n");
    }


    echo "<br>\n<pre>\$_GET = \n";
    var_dump($_GET);
    echo "</pre>";
?>