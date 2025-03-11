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
    writeHeader();
        //echo "Tipo Casa: " . htmlspecialchars($id) . "<br>";

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
    $sql = "UPDATE CS_IMMOBILE SET stato = 'Riservato' WHERE id = '$id'";
    $result = $db->query($sql);

    echo('<div class="col-3">
            <center>
                <a class="btn btn-primary btn-lg" href="index.php" role="button">HOME</a>
            </center>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    ');



    $db->close();


    writeFooter();
?>