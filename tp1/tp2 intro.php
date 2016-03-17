<?php

function getHeader ($startSession,$title){
    if ($startSession == true)
        session_start();

        echo "
    <!DOCTYPE html>
    <html lan=\"en\">
    <head>
        <meta charset=\"UTD-8\">
        <title<Title</title>
            <link rel='stylesheet' href='../bootstrap-3.3.6-dist/css/bottstrap.min.css'>

    </head>
    <body>
    </body>
    </html>";
}

function getFooter(){
    echo"</body></html>";
}

