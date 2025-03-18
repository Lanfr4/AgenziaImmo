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
                case "venditaAbitazione" :{

                    exit();
                };

                case "aggiungiAbitazione" :{
                    echo('
                        <form>
                            <div class="mb-3">
                                
                            </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Aggiungi</button>
                        </form>');
                    exit();
                };

                case "gestisciAbitazione" :{
                    
                    exit();
                };
            }
        }
        else{
            echo('<a href="index.php">Utente non loggato, eseguire il login</div>');
        }

        writeFooter();
?>