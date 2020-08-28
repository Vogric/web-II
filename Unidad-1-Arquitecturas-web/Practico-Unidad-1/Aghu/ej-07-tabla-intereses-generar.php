<?php
define('MESES','12'); // ¡Las constantes deben ser siempre cadenas!
$MESES = 12;
$monto_inicial = $_POST['monto-inicial'];
$interes = $_POST['interes'];

echo ( "<p>Monto inicial: $monto_inicial<br/>\n" );
echo ( "Interés: $interes</p>\n" );

echo ( "<table><thead><th>Mes</th><th>Monto</th></thead>\n" );

for ( $mes = 1; $mes <= MESES; $mes++ ) {
    # Fórmula de interés simple
    $monto = $monto_inicial * ( 1 + $interes / 100 * $mes );
    echo ( "<tr><td>$mes</td><td>\$ $monto</td></tr>\n" );
}
echo ( "</table>" );
