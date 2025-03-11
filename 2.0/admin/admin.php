<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal modulo
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

    $sql = "SELECT * FROM admin.id,  ";

    $resultset= 

    echo('tutto apposto');
?>