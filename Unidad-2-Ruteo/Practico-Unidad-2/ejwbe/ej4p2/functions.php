<?php

function showHome()
{
    echo "<h1>HOME</h1>";
};

function showListUsers()
{
    echo "<h1>LISTA DE USUARIOS DEL SISTEMA</h1>";
};

function showAddUser()
{
    echo "<h1>AGREGAR UN NUEVO USUARIO</h1>";
};

function showInfoUser( $dni )
{
    echo "<h1>BUSCAR UN NUEVO USUARIO CON EL DNI: " . $dni . "</h1>";
};

?>