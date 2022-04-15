<?php

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