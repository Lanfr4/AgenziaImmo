<?php
    session_start();
    if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
    if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

    // includo la libreria con funzioni necessarie all'interfaccia.
    require('../include/lib.php');
    // richiamo la funzione per la creazione della sezione iniziale delle pagine
    writeHeader();

    // arrivo alla pagina dopo aver inserito le credenziali
    // per eseguire un login come admin. (ci arrivo da un form).
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
            $sql = "SELECT * FROM CS_ADMIN AS a WHERE email='$email' AND password='$password'";
            //echo($sql);
            $resultSet = $db->query($sql);
            $db->close();

            if($resultSet->num_rows > 0){
                $record = $resultSet->fetch_assoc();
                $_SESSION['logged'] = true;
                $_SESSION['idAdmin'] = $record['id'];
                $_SESSION['email'] = $record['email'];
                $_SESSION['password'] = $record['password'];
            }
            $_SESSION['logged'] = true;
            $_SESSION['idAdmin'] = 1;
            $_SESSION['cognome'] = 'Agenzia';
            $_SESSION['nome'] = 'Immobiliare';
            /*
            if($u == "admin" && $p=="admin"){
                $_SESSION['logged'] = true;
            }
            else{
                echo('<div class="alert alert-warning">Credenziali non valide</div>');
            }*/
            if($sc == "logout"){
                $_SESSION['logged'] = false;
                session_destroy();
            }
            
            if($_SESSION['logged'] == true){ // se sono loggato mostro il gestionale con menu.
                echo('Admin: '.$_SESSION['idAdmin']." ".$_SESSION['cognome']." ".$_SESSION['nome']);
                writeMenu();
            
                // << your code start here >>
                    echo('<div class="alert alert-success">Pare funzionare tutto E sono pure loggato!</div>');
                // << end fo your code >>
        }
        else{
            echo('<div class="alert alert-danger">Non sei loggato</div>');
            header("login.php");

        }
    }
// richiamo la funzione per la creazione della sezione finale delle pagine.

writeFooter();
?>