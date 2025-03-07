<?php
    
    require('../include/lib.php');

    writeheader();
    writeMenu();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal modulo
        $tipoCasa = $_POST['tipoCasa'];
        $quartiere = $_POST['quartiere'];
    
        // Stampa i dati
        
    }

    echo('<div class="alert alert-success">Pare funzionare tutto!</div>');


    //echo "Tipo di Casa: " . htmlspecialchars($tipoCasa) . "<br>";
    //echo "Quartiere: " . htmlspecialchars($quartiere) . "<br>";

    writefooter();

?>