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

       $sql ="SELECT * FROM CS_IMMOBILE AS imm, CS_ACQUIRENTE AS acq
       WHERE $id = imm.id AND $idACQ = acq.id"; 
       
       echo($sql);

       /*$resultSet = $db->query($sql);

       if($resultSet->num_rows>=1){
         
       }
       else{

       }  
        //echo($sql);
    }*/
    }
    else{
        echo('<a href="home.php">Utente non loggato, eseguire il login</div>');
    }


?>