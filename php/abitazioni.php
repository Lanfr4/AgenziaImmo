<?php
        // Libreria per tutte le pagine 
        require('../include/lib.php');

        writeheader();
        writeMenu();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recupera i dati dal modulo
            $tipocasa = $_POST['tipoCasa'];
            $quartiere = $_POST['quartiere'];
        }

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
        $sql = "SELECT * FROM cs_immobile"; 
        $resultSet = $db->query($sql);
        
        echo "Tipo Casa: " . htmlspecialchars($tipocasa) . "<br>";
        echo "Quartiere: " . htmlspecialchars($quartiere) . "<br>";

        echo('<table class="table table-striped table-hover">
                <caption>Lista degli Immobili </caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Prezzo Richiesto</th>
                        <th scope="col">Superficie</th>
                        <th scope="col">Quartiere</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Data Disponibilità</th>
                    </tr>
                </thead>
                <tbody>');

             

            // Chiusura della connessione
            $db->close();
            
        writefooter();
?>

