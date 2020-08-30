<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];

if ( !empty( $_POST['name'] ) && !empty( $_POST['surname'] ) && !empty( $_POST['age'] ) ) {

    echo ( "Name: $name <br> Surname: $surname <br> Age: $age" );

} else {
    echo ( "All fields must be complete" );
}