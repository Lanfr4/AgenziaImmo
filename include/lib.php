<?php
/* Questo file contiene tutte le funzioni utili e che saranno richiamate nelle diverse pagine,
il file sarà incluso nei file php che si trovano in /php. */

    $DBHOST= "localhost";
    $DBUSER= "root";
    $DBPASSWORD= "root";
    $DBNAME ="csAgenziaImmo";

/**
 * Funzione che genera la parte iniziale di ogni pagina, costruendo il corpo della pagina partendo dai tag fondamentali, genera il codice fino
 * alla DIV generale che conterrà tutta l'interfaccia predisposta nelle diverse pagine di gestione.
 */

 function writeHeader(){
    echo('
        <!DOCTYPE HTML>
            <html>
                <head>
                    <meta charset="utf-8">
                    <title>Agenzia Immobiliare</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                </head>
                <body>
                    <div class="container">
    ');
    return;
}

/**
 * Funzione che genera le righe di chiusura di ogni pagina così da chiudere in modo corretto ogni interfaccia.
 */
function writeFooter(){
    echo('
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                </body>
            </html>');
    return;
}

/**
 * Funzione che genera il codice HTML e Bootstrap per rappresentare una barra di navigazione ad inizio pagina o comunque dove viene richiamata.
 */
function writeMenu() {
    echo('
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid row">
                <div class="col-3">
                    <center><a class="navbar-brand" href="index.php">HOME</a></center>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-3">
                    <form name="tipoCasa" action="abitazioni.php" method="post">
                        <select class="form-select" name="tipoCasa" aria-label="Default select example">
                            <option value="1" selected>Seleziona tipo di casa</option>
                            <option value="2">Negozio</option>
                            <option value="3">Monolocale</option>
                            <option value="4">Bilocale</option>
                            <option value="5">Villa</option>
                            <option value="6">Attico</option>
                            <option value="7">Ufficio</option>
                            <option value="8">Capannone</option>
                            <option value="9">Box</option>
                        </select>
                </div>
                <div class="col-3">
                    <select class="form-select" name="quartiere" aria-label="Default select example">
                        <option value="1" selected>Quartiere</option>
                        <option value="2">Trastevere</option>
                        <option value="3">Colosseo</option>
                        <option value="4">Vaticano</option>
                        <option value="5">Parioli</option>
                    </select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">INVIO</button>
                </div>
                </form>
            </div>
        </nav>
    ');

    return;
}
?>
