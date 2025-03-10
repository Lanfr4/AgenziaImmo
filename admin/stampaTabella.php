<?php

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
                <th scope="col">Gestisci</th>
            </tr>
        </thead>
        <tbody>');

while ($record = $resultSet->fetch_assoc()) {
    echo('<tr>
            <th scope="row">' . $record['id'] . '</th>
            <td>' . $record['stato'] . '</td>
            <td>' . $record['type'] . '</td>
            <td>' . $record['prezzoRichiesto'] . '</td>
            <td>' . $record['superficie'] . '</td>
            <td>' . $record['quartiere'] . '</td>
            <td>' . $record['indirizzo'] . '</td>
            <td>' . $record['Data_disponibilita'] . '</td>
            <td>
                <button class="btn btn-primary" onclick="gestisci(' . $record['id'] . ')">Gestisci</button>
                <a href="modifiche.php?id=' . $record['id'] . '" class="btn btn-primary">Gestisci</a>
            </td>
        </tr>');
}

echo('</tbody>
    </table>');

// Chiusura della connessione
$db->close();
?>