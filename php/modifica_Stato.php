<?php

require('../include/lib.php');

// Connessione al database
$DBHOST = "localhost";
$DBUSER = "root";
$DBPASSWORD = "root";
$DBNAME = "csagenziaimmo";

$db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

?>