<?php

require('../include/lib.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

    // Query preparata per sicurezza
    $stmt = $db->prepare("SELECT * FROM CS_ADMIN WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $db->close();

    if ($resultSet->num_rows > 0) {
        $record = $resultSet->fetch_assoc();

        // Verifica della password
        if (password_verify($password, $record['password'])) {
            $_SESSION['logged'] = true;
            $_SESSION['idAdmin'] = $record['id'];
            $_SESSION['cognome'] = $record['cognome'];
            $_SESSION['nome'] = $record['nome'];

            // Login riuscito

            writeMenu();
        } else {
            // Password errata
            header("Location: login.php"); // Reindirizza alla pagina di login
            exit;
        }
    } else {
        // Utente non trovato
        header("Location: login.php"); // Reindirizza alla pagina di login
        exit;
    }
}
?>