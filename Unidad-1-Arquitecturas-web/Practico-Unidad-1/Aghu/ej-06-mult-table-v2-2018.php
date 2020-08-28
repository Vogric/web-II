<?php
$MAX = 20;
$MAX_ROWS = $MAX;
$MAX_COLS = $MAX;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/mul_table.css" />
  <title>Practico 1, versión 2, Ejercicio 3, de Web2, 2020, Unicen</title>
</head>

<body>
  <h1>Tabla de multiplicar por <?php echo $MAX; ?></h1>
  <table>
    <?php
$salida = '<tr><th class="left-upper-cell"></th>';
for ( $col = 1; $col <= $MAX_COLS; $col++ ) {
    $salida .= "<th>$col</th>";
}
$salida .= "</tr>\n";

for ( $row = 1; $row <= $MAX_ROWS; $row++ ) {
    $salida .= "<tr><td class='first-col'>$row</td>";

    for ( $col = 1; $col <= $MAX_COLS; $col++ ) {
        if ( $col == $row ) {
            $salida .= '<td class="square-value">';
        } else {
            $salida .= '<td>';
        }
        $salida .= ( $col * $row ) . '</td>';
    }
    $salida .= "</tr>\n";
}
echo $salida;
?>
  </table>
</body>

</html>