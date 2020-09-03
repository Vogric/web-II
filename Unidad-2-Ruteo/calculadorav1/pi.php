<?php

function GetPi(){
    
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pi</title>
    </head>
    <body> ';

    $html.= '<h1>'.pi().'</h1>';

    $html.='</body>
    </html>';

return $html;
}


?>