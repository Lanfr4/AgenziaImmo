<?php
        session_start();
        if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
        if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];
    
        // Libreria per tutte le pagine 
        require('../include/lib.php');

        writeheader();

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recupera i dati dal modulo
            $tipocasa = $_POST['tipodiCasa'];
            $quartiere = $_POST['quartiere'];
        }
        
        if($_SESSION['logged'] == true){

        $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
        writeMenu();
        
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
                        <th scope="col">Transazione</th>
                    </tr>
                </thead>
                <tbody>');
                
            if($tipocasa>1 || $quartiere>1){
                if($tipocasa>1 && $quartiere == 1){
                    //echo ("toc toc");
                    $sql1 = "SELECT imm.id, imm.stato, tc.descrizione AS idType,  imm.prezzoRichiesto, imm.superfice, q.id AS idQuartiere, imm.indirizzo, imm.Data_disponibilita
                                FROM CS_IMMOBILE AS imm
                                JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                                JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id
                                WHERE tc.id = '$tipocasa'";
                                
                                $resultSet = $db->query($sql1);

                }

                else if($quartiere>1 && $tipocasa==1){

                    $sql2 = "SELECT imm.id, imm.stato, tc.descrizione AS idType,  imm.prezzoRichiesto, imm.superfice, q.descrizione AS idQuartiere,  imm.indirizzo, imm.Data_disponibilita
                                FROM CS_IMMOBILE AS imm
                                JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                                JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id
                                WHERE q.id = '$quartiere'";

                            $resultSet = $db->query($sql2);
                }
            }
            else{

                $sql = "SELECT imm.id, imm.stato, tc.descrizione AS idType,  imm.prezzoRichiesto, imm.superfice, q.descrizione AS idQuartiere,  imm.indirizzo, imm.Data_disponibilita
                        FROM CS_IMMOBILE AS imm
                        JOIN CS_TIPOCASA AS tc ON imm.idType = tc.id
                        JOIN CS_QUARTIERE AS q ON imm.idQuartiere = q.id";

                $resultSet = $db->query($sql);
            }
            
            while ($record = $resultSet->fetch_assoc()){
                echo('<tr>
                        <th scope="row">' . $record['id'] . '</th>
                        <td class="status" id="status-' . $record['id'] . '">' . $record['stato'] . '</td>
                        <td>' . $record['idType'] . '</td>
                        <td>' . $record['prezzoRichiesto'] . '</td>
                        <td>' . $record['superfice'] . '</td>
                        <td>' . $record['idQuartiere'] . '</td>
                        <td>' . $record['indirizzo'] . '</td>
                        <td>' . $record['Data_disponibilita'] . '</td>
                        <td>
                            <form action="modifiche.php?scelta=gestisciAbitazione" method="POST" class="reservation-form">
                                <input type="hidden" name="id" value="'. $record['id'] .'">
                                <button type="submit" class="btn btn-primary">Gestisci</button>
                            </form>
                        </td>
                        <td>
                            <form action="modifiche.php?scelta=venditaAbitazione" method="POST" class="reservation-form">
                                <input type="hidden" name="id" value="'. $record['id'] .'">
                                <button type="submit" class="btn btn-primary">Vendita</button>
                            </form>
                        </td>
                    </tr>
                    ');
                }

        echo('</tbody>
            </table>');

        // Chiusura della connessione
        $db->close();
        }
        else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }

    writefooter();
?>

