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
            $id = $_POST['id'];// id dell' immobile che si vuole vendere
            $idAcq = $_POST['idAcq']; // id dell' acquirente che fa l' acquisto 
        }

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

        $sql = "SELECT * FROM CS_VENDITA AS v 
        WHERE v.idAcquirente='$idAcq'  AND v.idImmobile ='$id'"; 

        //$sql = "DELETE  FROM CS_IMMOBILE WHERE id = '$id'";
        
        $resultSet = $db->query($sql);
        
        //echo($sql);

        if($db->affected_rows>0){
            echo('<a href="index.php">L Immobile è stato venduto con successo </div>');
        }
        else{
            echo('<a href="index.php">L Immobile NON  è stato venduto con successo </div>');
            }
    }
    else{
        echo('<a href="home.php">Utente non loggato, eseguire il login</div>');
    }


?>