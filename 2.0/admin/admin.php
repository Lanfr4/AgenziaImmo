<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal modulo
        $email = $_POST['email'];
        $password = $_POST['password'];
    }


    
    echo('tutto apposto');
?>