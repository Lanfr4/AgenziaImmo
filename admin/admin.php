<?php

    session_start();

    require("../include/lib.php");

    writeheader();
        if($_SESSION['logged'] == true){
            writeMenu();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Recupera i dati dal modulo
                $email = $_POST['email'];
                $password = $_POST['password'];
            }

            echo "EMAIL: " . htmlspecialchars($email) . "<br>";
            echo "PASSWORD: " . htmlspecialchars($password) . "<br>";

        }
        else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }
    writefooter();

?>