<?php
    echo( "<h1>Pruebas de <code>empty</code> y <code>isset</code></h1>\n");
    if(empty($_POST)){
        echo("\$_POST is empty<br>\n");
    }
    else {
        echo("\$_POST is not empty<br>\n");
    }  

    if(empty($_POST['nombre'])){
        echo("nombre is empty<br>\n");
    } 
    else {
        echo("nombre is not empty<br>\n");
    }
    if(isset($_POST['nombre'])){
        echo("nombre está seteado<br>\n");
    } 
    else {
        echo("nombre no está seteado<br>\n");
    }
    if(empty($_POST['apellido'])){
        echo("apellido is empty<br>\n");
    } 
    else {
        echo("apellido is not empty<br>\n");
    }
    if(isset($_POST['apellido'])){
        echo("apellido está seteado<br>\n");
    } 
    else {
        echo("apellido no está seteado<br>\n");
    }
    if(empty($_POST['edad'])){
        echo("edad is empty<br>\n");
    } 
    else {
        echo("edad is not empty<br>\n");
    }
    if(isset($_POST['edad'])){
        echo("edad está seteado<br>\n");
    } 
    else {
        echo("edad no está seteado<br>\n");
    }


    echo "<br>\n<pre>\$_POST = \n";
    var_dump($_POST);
    echo "</pre>";
?>