<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mul_table.css" />
    <title>Ejercicio 6 Tablas de multiplicar - Práctico 1, Web 2, 2020, TUDAI</title>
</head>
<body>
    <h1>Tablas de multiplicar generadas en backend</h1>

    <form action="ej-06-mult-table-2020.php" method="GET">

        <label for="maximo">Límite para tabla de mutiplicar:
            <input  type="number" min="1" max="99"
                    name="maximo" id="maximo"
                    value="20" />
        </label>
        <input type="submit" value="Generar"/>

    </form>
    <?php        
        $maximo =  empty( $_GET['maximo'] )? 20 : $_GET['maximo'];

        echo ( "<h2>Tablas de multiplicar hasta $maximo</h2>" );

        echo ( "<table>" );
        echo ( '<tr>' );
        // La celda vaía arriba a la izquierda
        echo ( '<th class="left-upper-cell"></th>' );

        // Resto de la primera fila, que va resaltada y con fondo de otro color (CSS)
        for ( $col = 1; $col <= $maximo; $col++ ) {
            echo ( "<th>$col</th>" );
        }
        echo ( "</tr>\n" );

        // Las filas propias, que son las tablas de multiplicar
        for ( $row = 1; $row <= $maximo; $row++ ) {

            echo ( '<tr>' );

            // La primera columna de cada fila, va formateada como las cabeceras (CSS)
            echo ( "<td class='first-col'>$row</td>" );

            for ( $col = 1; $col <= $maximo; $col++ ) {
                if ( $col == $row ) {
                    echo ( '<td class="square-value">' );
                } else {
                    echo ( '<td>' );
                }
                echo ( $col * $row ) . '</td>';
            }
            echo ( "</tr>\n" );
        }
        echo ( "</table>" );
    ?>
    
</body>
</html>