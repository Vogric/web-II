<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

switch ( $operacion ) {
    case "suma":
        echo ( "$numero1 + $numero2 = " . ( $numero1 + $numero2 ) );
        break;
    case "resta":
        echo ( "$numero1 - $numero2 = " . ( $numero1 - $numero2 ) );
        break;
    case "multiplicacion":
        echo ( "$numero1 * $numero2 = " . ( $numero1 * $numero2 ) );
        break;
    case "division":
        echo ( "$numero1 / $numero2 = " . ( $numero1 / $numero2 ) );
        break;
}

?>

<a href="ej-8.html">Home</a>
