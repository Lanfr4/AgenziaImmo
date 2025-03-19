<?php
    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];


    require('../include/lib.php');

    writeHeader(); 

    //echo('Va tutto');
    if($_SESSION['logged'] == true){
        
        writeMenu();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recupera i dati dal modulo
            $id = $_POST['id'];
        }

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

        $sql = "DELETE * FROM CS_IMMOBILE AS imm WHERE $id= imm.id";
        
        $resultSet = $db->query($sql);

        if($resultSet->num_rows>=1 ){
            echo('<a href="abitazioni">L Immobile è stato vebduto con successo </div>');
        }
        else{
            echo('<a href="abitazioni">La vendita n on è andata a buon fine </div>');

        }
    }
    else{
        echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
    }


?>