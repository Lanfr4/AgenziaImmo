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
        
        
        if($tipocasa == 0 && $quartiere == 0){// Il cliente vuole guardare tutte le case, in qualsiasi quartiere e di qualsiasi tipo



        }
        else if($tipocasa == 0 && $quartiere !=0){// Il cliente vuole guardare un qualsiasi edificio in un determinato quartiere






        }
        else if($tipocasa!=0 && $quartiere == 0){// Il cliente vuole guardare un determinato tipo di casa in tutti i quartieri
            
            
            
            
        }
        else{// Il cliente ha scelto un determinato quartiere dove guardare un determinato tipo di edificio

        }
        writefooter();
?>