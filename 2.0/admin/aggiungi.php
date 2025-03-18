<?php

    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

    require('../include/lib.php');

    writeHeader();

    if($_SESSION['logged'] == true){
        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
        writeMenu();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tipocasa = $_POST['tipodiCasa'];
            $quartiere = $_POST['quartiere'];
            $indirizzo = $_POST['indirizzo'];
            $data = $_POST['data'];
            $superfice = $_POST['superfice'];
            $prezzoRichiesto = $_POST['prezzoRichiesto'];
            $stato ='Offerto'; // lo devo mettere offerto perche sta inserendo una nuova abitazione :) 
        }
        
        if($quartiere >1 &&  $tipocasa >1){
            $sql = "INSERT INTO CS_IMMOBILE(stato, idType, prezzoRichiesto, superfice, idQuartiere, indirizzo, Data_disponibilita)
                    VALUES($stato, $tipocasa, $prezzoRichiesto, $superfice, $quartiere, $indirizzo, $data);";
            
            $resultSet= $db->query($sql);


            echo('<a href="index.php">Una nuova abitazione è stata aggiunta, puoi ritornare indietro</div>');
        }
        else{
            echo('<a href="index.php">Hai inserito delle credenziali sbagliate, riprova</div>');
        }
    }
    else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }




?>