<?php

    require('../include/lib.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal modulo
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    echo "Tipo Casa: " . htmlspecialchars($email) . "<br>";
    echo "Quartiere: " . htmlspecialchars($password) . "<br>";
    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

    $sql = "SELECT * FROM CS_ADMIN  
            WHERE email = '$email' AND password = '$password'"; 

    $resultSet = $db->query($sql);
    if(){


    }
    else{
        

    }
?>