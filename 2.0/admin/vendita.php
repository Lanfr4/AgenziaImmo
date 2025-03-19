<?php
    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];


    require('../include/lib.php');

    writeHeader(); 

    //echo('Va tutto');
    if($_SESSION['logged'] == true){
        
        writeMenu();

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

        

    }
    else{
        echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
    }


?>