<h1>Tabla de multiplicar</h1>
<title>Multiplication table in PHP</title>
<style type="text/css">
body {
  font-size: 12px;
}

td {
  height: 24px;
  text-align: center;
  width: 24px;
}

td.yellow {
  background-color: yellow;
}

td.white {
  background-color: #fff;
}

td a {
  display: block;
  text-decoration: none;
}

td a:hover {
  background-color: #faa;
}
</style>

<table border="1">
  <?php

for ( $r = 1; $r < 21; $r++ ) {
    echo "<tr>";
    for ( $c = 1; $c < 21; $c++ ) {
        $bg = ( $c == $r ) ? 'yellow' : 'white';
        echo "<td class='$bg'><a href='#' title='$r x $c = " . $r * $c . " ' >" . $r * $c . "</a></td>";
    }
    echo "</tr>";
}
?>
</table>
<!-- // echo ( "<pre>" );
// echo "<table border=1 width=60%>";
// for ( $fila = 1; $fila <= 20; $fila++ ) {
//     echo ( "<tr>$fila</tr>" );
//     for ( $columna = 1; $columna <= 20; $columna++ ) {
//         echo ( "<td >" );
//         $total = $fila * $columna;
//         echo ( "$total" );
//         echo ( "</td>" );
//     }
// }
// if ( $fila && $columna >= 20 ||  ) {
//     color:yellow;
// }
// ;
// echo ( "</table" );
// echo ( "</pre>" ); -->