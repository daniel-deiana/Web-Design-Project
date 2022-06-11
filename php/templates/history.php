<?php

    // sezione dove vengono caricati i record relativi alle prenotazioni di un determinato utente

    session_start();


    if(!isset($_SESSION['username']))
    {
        echo 'ACCESSO NEGATO AD UTENTI NON LOGGATI';
        exit;
    }
    
    $echoString =   '<script>
                        requestBookHistory('.$_SESSION['username'].'
                    </script>';
?>