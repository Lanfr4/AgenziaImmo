<?php

    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

    require("../include/lib.php");

    writeHeader();

    echo('Va tutto');

    writeFooter();

    switch($sc){
        case "venditaAbitazione" :{
            
            exit();
        };

        case "aggiungiAbitazione" :{
            
            exit();
        };

        case "gestisciAbitazione" :{
            
            exit();
        };
    }

?>