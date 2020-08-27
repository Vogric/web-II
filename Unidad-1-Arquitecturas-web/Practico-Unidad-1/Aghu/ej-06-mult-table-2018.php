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
    <title>Practico 1, Ejercicio 0, de Web2, 2017, Unicen</title>    
  </head>
  <body>
  <h1>Tabla de multiplicar por <?php echo $MAX; ?></h1>
  <table>  
  <?php
    echo '<tr><th class="left-upper-cell"></th>';
    for($col=1; $col<=$MAX_COLS; $col++) {        
        echo '<th>'. ( $col)  .'</th>';        
      }
    echo "</tr>\n";
    for($row=1; $row<=$MAX_ROWS; $row++) {
      echo "<tr><td class='first-col'>$row</td>";
      for($col=1; $col<=$MAX_COLS; $col++) {        
        if ( $col == $row ) {
          echo '<td class="square-value">';
        }
        else {
          echo  '<td>';
        }
        echo ( $col * $row )  .'</td>';        
      }
      echo "</tr>\n";
    }
  ?>
  </table>
  </body>
</html>
