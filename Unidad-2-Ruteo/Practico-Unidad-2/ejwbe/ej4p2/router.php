<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'functions.php';

// lee la acción
if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: sumar/1/2 -->  lo convierte en un arreglo: ['sumar', 1, 2]
$params = explode('/', $action);

// $params[0] = la accion escrita en la URL.
switch($params[0]) {

  case 'lista':
    showListUsers();
        break;

  case 'usuario':
    showAddUser();
      break;

  case 'info':
    $dni = NULL;
    if(isset($params[1])){
        $dni = $params[1];
    }
    echo showInfoUser($dni);
        break;

  case 'home':
    echo showHome();
        break;

  default: 
    echo('404 Page not found'); 
        break;
}

?>
