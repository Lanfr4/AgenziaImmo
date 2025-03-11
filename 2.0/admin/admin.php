<?php
session_start();

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = false;
}

require("../include/lib.php");

writeheader();

if ($_SESSION['logged'] == true) {
    writeMenu();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal modulo
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Display the email and password (for demonstration purposes only)
        echo "EMAIL: " . htmlspecialchars($email) . "<br>";
        echo "PASSWORD: " . htmlspecialchars($password) . "<br>";
    }
} else {
    echo('<a href="login.php">Utente non loggato, eseguire il login</a>');
}
writefooter();
?>