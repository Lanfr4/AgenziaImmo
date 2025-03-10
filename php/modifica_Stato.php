<?php

    require('../include/lib.php');

    // Connessione al database
    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "root";
    $DBNAME = "csAgenziaImmo";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal modulo
        $id = $_POST['id'];
    }

     //echo "Tipo Casa: " . htmlspecialchars($id) . "<br>";

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
    $sql = "UPDATE CS_IMMOBILE SET stato = 'Riservato' WHERE id = '$id'";
    $result = $db->query($sql);
    $db->close();

?>