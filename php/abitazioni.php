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

    if($tipocasa == 0 && $quartiere == 0){// Il cliente vuole guardare tutte le case, in qualsiasi quartiere e di qualsiasi tipo

        
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
    }

    else if($tipocasa == 0 && $quartiere !=0){// Il cliente vuole guardare un qualsiasi edificio in un determinato quartiere
            
            while ($record = $resultSet->fetch_assoc()) {
                if($record.['quartiere'] == $quartiere){
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
            }
        }

    else if($tipocasa!=0 && $quartiere == 0){// Il cliente vuole guardare un determinato tipo di casa in tutti i quartieri
            while ($record = $resultSet->fetch_assoc()) {
                if($record.['tipocasa'] == $tipocasa){
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

            }

            $db->close();
    } 
/*
        else{// Il cliente ha scelto un determinato quartiere dove guardare un determinato tipo di edificio

            while ($record = $resultSet->fetch_assoc()) {
                if($record.['quartiere'] == $quartiere && $record.['tipocasa'] == $tipocasa){
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
            }
            $db->close();
        }
        
*/
        writefooter();
?>

