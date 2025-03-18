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
            $stato ='Offerto'; // lo devo mettere offerto perche sta inserendo una nuova abitazione :) 
        }
        echo($tipocasa);
        echo('<br>');
        echo($quartiere);

        if($quartiere >1 &&  $tipocasa >1){
            echo('tutto ancora + apposto');
        }
        else{
            echo('<a href="index.php">Hai inserito delle credenziali sabgliate, riprova</div>');
        }
    }
    else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }




?>