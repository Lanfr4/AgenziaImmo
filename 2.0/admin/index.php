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
if($sc == "login"){
    $email = $_REQUEST['mail'];
    $password = $_REQUEST['password'];

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
    $sql = "SELECT * FROM CS_ADMIN AS a WHERE email='$email' AND password='$password";
    echo($sql);
    $resultSet = $db->query($sql);
    //$db->close();

    if($resultSet->num_rows == 1){
        $record = $resultSet->fetch_assoc();
        $_SESSION['logged'] = true;
        $_SESSION['idAdmin'] = $record['id'];
        $_SESSION['cognome'] = $record['cognome'];
        $_SESSION['nome'] = $record['nome'];
    }
    $_SESSION['logged'] = true;
    $_SESSION['idAdmin'] = 1;
    $_SESSION['cognome'] = 'Pradel';
    $_SESSION['nome'] = 'Cescoz';
    /*
    if($u == "admin" && $p=="admin"){
        $_SESSION['logged'] = true;
    }
    else{
        echo('<div class="alert alert-warning">Credenziali non valide</div>');
    }*/
}
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
    // non sono loggato quindi mostro il form per eventuale login
    echo('<form method="POST" action="index.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>');
}
// richiamo la funzione per la creazione della sezione finale delle pagine.

writeFooter();
?>