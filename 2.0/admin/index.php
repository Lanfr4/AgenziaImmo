<?php

session_start();
if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

require("../include/lib.php");

writeHeader(); 

if($_SESSION['logged'] == true){
    writeMenu();
}
else{

    echo('<a href="home.php">Utente non loggato, eseguire il login</div>');
}

?>