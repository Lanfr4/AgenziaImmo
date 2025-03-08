<?php
        // Libreria per tutte le pagine 
        require('../include/lib.php');

        writeheader();
        writeMenu();
    
        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
        $sql = "SELECT * FROM cs_immobile";
        $resultSet = $db->query($sql);

    
        // Tabella HTML
        echo('<table class="table table-striped table-hover">
                <caption>Lista dei prodotti disponibili</caption>
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

        // Iterazione attraverso i risultati
        while ($record = $resultSet->fetch_assoc()) {
            echo('<tr>
                    <th scope="row">' .$record['id'] . '</th>
                    <td>' . $record['stato'] . '</td>
                    <td>' . $record['type'] . '</td>
                    <td>' . $record['prezzoRichiesto']) . '</td>
                    <td>' . $record['superfice'] . '</td>
                    <td>' . $record['quartiere'] . '</td>
                    <td>' . $record['indirizzo'] . '</td>
                    <td>' . $record['Data_disponibilita'] . '</td>
                </tr>';
        }
        echo('</tbody>
            </table>');

        // Chiusura della connessione
        $db->close();

        writefooter();
?>