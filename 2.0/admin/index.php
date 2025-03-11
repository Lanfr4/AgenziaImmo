<?php

require('../include/lib.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

    // Query preparata per sicurezza
    $sql = "SELECT a.email 
            FROM CS_ADMIN AS a WHERE a.email = '$email'";
    $resultSet = $db->query($sql);

    if ($resultSet->num_rows > 0) {
        
        $record = $resultSet->fetch_assoc();
        $sql1 = "SELECT a.password
                FROM CS_ADMIN AS a WHERE a.password = '$password'";
        $resultSet = $db->query($sql);

        // Verifica della password
        if ($resultSet->num_rows > 0) {
            $_SESSION['logged'] = true;
            $_SESSION['idAdmin'] = $record['id'];
            $_SESSION['cognome'] = $record['cognome'];
            $_SESSION['nome'] = $record['nome'];

            // Login riuscito
            writeMenu();
        } 
        else {
            // Password errata
            header("Location: login.php"); // Reindirizza alla pagina di login
            exit;
        }
    } else {
        // Utente non trovato
        header("Location: login.php"); // Reindirizza alla pagina di login
        exit;
    }
?>