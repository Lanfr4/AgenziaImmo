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

        //echo($id);

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

        $sql = "DELETE  FROM CS_IMMOBILE AS imm WHERE $id= imm.id";
        
        $resultSet = $db->query($sql);
 
            echo('<a href="index.php">L Immobile è stato venduto con successo </div>');
    }
    else{
        echo('<a href="home.php">Utente non loggato, eseguire il login</div>');
    }


?>