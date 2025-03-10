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

        
        //echo "Tipo Casa: " . htmlspecialchars($tipocasa) . "<br>";
        //echo "Quartiere: " . htmlspecialchars($quartiere) . "<br>";

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
                        <th scope="col">Azione</th>
                    </tr>
                </thead>
                <tbody>');

            if($tipocasa !=  1 && $quartiere!=1){
                
                if($tipocasa!=1){

                    $sql1 = "SELECT imm.id, imm.stato, tc.id AS idType, tc.descrizione AS tipoCasa, imm.prezzoRichiesto, imm.superfice, q.id AS idQuartiere, q.descrizione AS quartiere, imm.indirizzo, imm.Data_disponibilita
                                FROM CS_IMMOBILE AS imm
                                JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                                JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id
                                WHERE tc.id = '$tipocasa'";
                                $resultSet = $db->query($sql1);

                }

                else if($quartiere!=1){

                    $sql2 = "SELECT imm.id, imm.stato, tc.id AS idType, tc.descrizione AS tipoCasa, imm.prezzoRichiesto, imm.superfice, q.id AS idQuartiere, q.descrizione AS quartiere, imm.indirizzo, imm.Data_disponibilita
                                FROM CS_IMMOBILE AS imm
                                JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                                JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id
                                WHERE q.id = '$quartiere'";
                                $resultSet = $db->query($sql2);

                }
                else{

                    $sql3 = "SELECT imm.id, imm.stato, tc.id AS idType, tc.descrizione AS tipoCasa, imm.prezzoRichiesto, imm.superfice, q.id AS idQuartiere, q.descrizione AS quartiere, imm.indirizzo, imm.Data_disponibilita
                            FROM CS_IMMOBILE AS imm
                            JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                            JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id
                            WHERE q.id = '$quartiere' AND tc.id = '$tipocasa'";
                            $resultSet = $db->query($sql3);

                }
            }
            else{

                $sql = "SELECT imm.id, imm.stato, tc.id AS idType, tc.descrizione AS tipoCasa, imm.prezzoRichiesto, imm.superfice, q.id AS idQuartiere, q.descrizione AS quartiere, imm.indirizzo, imm.Data_disponibilita
                        FROM CS_IMMOBILE AS imm
                        JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                        JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id";

                $resultSet = $db->query($sql);
            }
            
                while ($record = $resultSet->fetch_assoc()) {
                    echo('<tr>
                            <th scope="row">' . $record['id'] . '</th>
                            <td class="status" id="status-' . $record['id'] . '">' . $record['stato'] . '</td>
                            <td>' . $record['idType'] . '</td>
                            <td>' . $record['prezzoRichiesto'] . '</td>
                            <td>' . $record['superfice'] . '</td>
                            <td>' . $record['idQuartiere'] . '</td>
                            <td>' . $record['indirizzo'] . '</td>
                            <td>' . $record['Data_disponibilita'] . '</td>');
                            if($record.['stato'] == "Offerto"){
                                echo('
                                    <td>
                                        <form action="modifica_stato.php" method="POST" class="reservation-form">
                                            <input type="hidden" name="id" value="'. $record['id'] .'">
                                            <button type="submit" class="btn btn-primary">Riservamelo</button>
                                        </form>
                                    </td>
                                </tr>
                                ');
                            }
                            else{
                                echo('</tr>');
                            }      
                }
        echo('</tbody>
            </table>');

        // Chiusura della connessione
        $db->close();
    
        writefooter();
?>

