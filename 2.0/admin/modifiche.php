<?php

    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

    require("../include/lib.php");

    writeHeader(); 

    //echo('Va tutto');
    if($_SESSION['logged'] == true){
        writeMenu();
            switch($sc){
                case "aggiungiAbitazione" :{
                    echo('
                            <h3>Aggiungi Immobile</h3><br>
                                <form action="aggiungi.php" method="post">
                                    <select class="form-select" name="tipodiCasa" aria-label="Default select example">
                                        <option value="1" selected>Seleziona tipo di casa</option>
                                        <option value="2">Negozio</option>
                                        <option value="3">Monolocale</option>
                                        <option value="4">Bilocale</option>
                                        <option value="5">Villa</option>
                                        <option value="6">Attico</option>
                                        <option value="7">Ufficio</option>
                                        <option value="8">Capannone</option>
                                        <option value="9">Box</option>
                                    </select><br>

                                    <label for="prezzoRichiesto">Prezzo Richiesto:</label>
                                    <input type="number" step="0.01" id="prezzoRichiesto" name="prezzoRichiesto" required><br><br>

                                    <label for="superfice">Superfice:</label>
                                    <input type="number" step="0.01" id="superfice" name="superfice" required><br><br>

                                    <select class="form-select" name="quartiere" aria-label="Default select example">
                                        <option value="1" selected>Quartiere</option>
                                        <option value="2">Trastevere</option>
                                        <option value="3">Parioli</option>
                                        <option value="4">Colosseo</option>
                                        <option value="5">Vaticano</option>
                                    </select><br>

                                    <label for="indirizzo">Indirizzo:</label>
                                    <input type="text" id="indirizzo" name="indirizzo" required><br><br>

                                    <label for="Data_disponibilita">Data di Disponibilità:</label>
                                    <input type="date" id="Data_disponibilita" name="data" required><br><br>

                                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                                </form>
                    ');
                    break;
                };
                case "gestisciAbitazione" :{ 

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Recupera i dati dal modulo
                        $id = $_POST['id'];
                    }

                    echo('<h3>Gestisci</h3><br>
                                <form action="aggiungi.php" method="post">
                                
                        
                        
                        ')
                    
                    break;

                };
                case "venditaAbitazione" :{

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Recupera i dati dal modulo
                        $id = $_POST['id'];
                    }

                    //echo($id);

                    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 

                    $sql ="SELECT * FROM CS_IMMOBILE AS imm WHERE  $id = imm.id";

                    $resultSet = $db->query($sql);

                    while ($record = $resultSet->fetch_assoc()) {
                        echo ('<li>
                                <div>
                                    <form action="vendita.php" method="post">
                                        <input type="hidden" name="id" value="' . $record['id'] . '">
                                        <strong>Stato:</strong> <span class="status" id="status-' . $record['id'] . '">' . $record['stato'] . '</span><br>
                                        <strong>Tipo:</strong> ' . $record['idType'] . '<br>
                                        <strong>Prezzo Richiesto:</strong> ' . $record['prezzoRichiesto'] . '<br>
                                        <strong>Superficie:</strong> ' . $record['superfice'] . '<br>
                                        <strong>Quartiere:</strong> ' . $record['idQuartiere'] . '<br>
                                        <strong>Indirizzo:</strong> ' . $record['indirizzo'] . '<br>
                                        <strong>Data Disponibilità:</strong> ' . $record['Data_disponibilita'] . '<br><br>
                                        <button type="submit" class="btn btn-primary">Completa Transazione</button>
                                    </form>
                                </div>
                            </li>');
                    }
            }
        }
    }
        else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }

        writeFooter();
?>