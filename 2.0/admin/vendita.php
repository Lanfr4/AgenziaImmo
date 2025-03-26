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

       $sql ="SELECT *
                FROM CS_IMMOBILE AS imm, CS_ACQUIRENTE AS acq
                WHERE imm.prezzoRichiesto <= acq.capitale AND imm.id = $id AND acq.id = $idAcq"; 
       
        $resultSet = $db->query($sql);

       if($resultSet->num_rows>=1){

        // si aggiorna il capitale dell' acquirente che ha comprato 
        $sql2 = "UPDATE CS_ACQUIRENTE AS acq 
                SET acq.capitale = acq.capitale - 
                (
                    SELECT imm.prezzoRichiesto 
                    FROM CS_IMMOBILE AS imm 
                    WHERE imm.id = $id
                )
                WHERE acq.id = $idAcq";
            
        $resultSet= $db->query($sql2);

        // si va a inserire nella tabella vendita tutti i dati relativi alla vendita
        $sql3 = "INSERT INTO CS_VENDITA ";

        // si cambia stato oppure si toglia l' edificio dal catalogo, devo decicdere
        $sql4 ="";
        }
        else{
            echo('<a href="index.php">Vendita NON  conclusa </div>');
        }  
    }
    else{
        echo('<a href="home.php">Utente non loggato, eseguire il login</div>');
    }
?>