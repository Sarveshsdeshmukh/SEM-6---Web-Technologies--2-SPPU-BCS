<?php
    session_start();

    if(!isset($_SESSION['hits'])){
        $_SESSION['hits'] = 0;
    }

    $_SESSION['hits']++;

    echo"Number of hits =>".$_SESSION['hits'];
?>