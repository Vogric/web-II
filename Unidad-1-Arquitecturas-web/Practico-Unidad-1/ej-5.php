<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / $altura ** 2;

if ( $imc < 18.5 ) {
    echo ( "Bajo peso" );
}
if ( $imc >= 18.5 && $imc < 25 ) {
    echo ( "Normal" );
}
if ( $imc >= 25 ) {
    echo ( "Sobrepeso" );
}
if ( $imc >= 30 ) {
    echo ( " Obesidad" );
}