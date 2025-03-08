<?php
        //Libreria per tutte le pagine 
        require('../include/lib.php');

        writeheader();
        writeMenu();

        // Connessione al database
        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
        $sql = "SELECT * FROM cs_immobile";
        $resultSet = $db->query($sql);


        // Tabella HTML
        echo('<table class="table table-striped table-hover">
                <caption>Lista dei prodotti disponibili</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
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

        // Vediamo i Contenuti della Tabella
        while ($record = $resultSet->fetch_assoc()) {
            echo('<tr>
                    <th scope="row">' . htmlspecialchars($record['id']) . '</th>
                    <td>' . htmlspecialchars($record['stato']) . '</td>
                    <td>' . htmlspecialchars($record['type']) . '</td>
                    <td>' . htmlspecialchars($record['prezzoRichiesto']) . '</td>
                    <td>' . htmlspecialchars($record['superfice']) . '</td>
                    <td>' . htmlspecialchars($record['quartiere']) . '</td>
                    <td>' . htmlspecialchars($record['indirizzo']) . '</td>
                    <td>' . htmlspecialchars($record['Data_disponibilita']) . '</td>
                </tr>');
        }

        echo('</tbody>
            </table>');

        // Chiusura della connessione
        $db->close();

        writefooter();

?>