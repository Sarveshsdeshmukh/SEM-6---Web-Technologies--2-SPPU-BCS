<?php
    echo'<h1 style = "font-size :20vw;color:crimson">Hello world!<h1>';

    SESSION_START();

    if(!isset($_SESSION['hits'])){
        $_SESSION['hits'] = 0;
    }

    $_SESSION['hits']++;
    echo'The page hit is :'.$_SESSION['hits'];

?>