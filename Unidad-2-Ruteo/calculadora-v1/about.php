<?php

function GetAbout($person = null){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <base href="http://'.$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]).'/" target="_blank">

        <title>About</title>
    </head>
    <body>';

    if ($person == null){
        $html.=  '<img src="img/about.jpg" alt="Capo DEV">
                    <h2> About General </h2>';
    }else{
        $html.=  ' <img src="img/juan.jpg" alt="Capo DEV">
                    <h2> About '.$person.' DEV </h2>';
    }

    $html.='</body>
    </html>';

    return $html;

}


?>