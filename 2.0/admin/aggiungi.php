<?php

    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

    require('../include/lib.php');

    writeHeader();

    if($_SESSION['logged'] == true){
        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tipocasa = $_POST['tipodiCasa'];
            $quartiere = $_POST['quartiere'];
            $indirizzo = $_POST['indirizzo'];
            $data = $_POST['data'];
            $superfice = $_POST['superfice'];
            $prezzoRichiesto = $_POST['prezzoRichiesto'];
        }
    }
    else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }




?>