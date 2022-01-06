<?php

    $title = 'Da Vincijev kod';
    $link  = 'https://hr.wikipedia.org/wiki/Da_Vincijev_kod';
    $Link  = 'Wikipedia';
    echo '
    <!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>Zadatak 3</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="Rjesenje treceg zadatka">
            <meta name="keywords" content="Da Vincijev Kod, Dana Brown, triler">
            <meta name="author" content="Zvonimir Cosic">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
    <body>
        <h1>' . $title . '</h1>
        <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
        <a href="'.$link.'">'.$Link.'</a>
    </body>
    </html>';

?>