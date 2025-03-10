<?php
    
    require('../include/lib.php');

    writeheader();
    writeMenu();


    echo('<div class="alert alert-success">Pare funzionare tutto!</div>');

    $abitazione = $_REQUEST['tipodiCASA'];
    $quartiere = $_REQUEST['quartiere'];

    echo $abitazione;
    echo $quartiere;










    writefooter();
?>