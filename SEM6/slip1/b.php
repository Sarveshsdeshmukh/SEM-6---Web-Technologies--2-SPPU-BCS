<?php
    session_start();

    if(!isset($_SESSION['hits'])){
        $_SESSION['hits'] = 0;
    }

    $_SESSION['hits']++;

    echo"<h1>The number of time the page hit :".$_SESSION['hits']."</h1>"
?>