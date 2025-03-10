<?php

    require('../include/lib.php');
// Connessione al database

    $DBHOST= "localhost";
    $DBUSER= "root";
    $DBPASSWORD= "root";
    $DBNAME ="csagenziaimmo";

    $db = new mysqli($servername, $username, $password, $dbname);



// Controlla se l'ID è stato inviato
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Modifica lo stato dell'abitazione
    $sql = "UPDATE abitazioni SET stato = 'riservato' WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Reindirizza alla pagina principale con un messaggio di successo
        header("Location: index.php?message=Stato aggiornato con successo.");
        exit();
    } else {
        // Reindirizza alla pagina principale con un messaggio di errore
        header("Location: index.php?message=Errore durante l'aggiornamento dello stato.");
        exit();
    }

    $stmt->close();
} else {
    echo "ID non fornito.";
}

$conn->close();
?>