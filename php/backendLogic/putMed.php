<?php

    /* 
        questa funzione si occupa di inserire una prenotazione 
        per un medicinale relativamente ad un certo utente
    */
    
    session_start();

    if (!isset($_SESSION['username'])){
        // non posso prenotare un farmaco se non sono loggato
        echo 'ACCESSO NEGATO AD UTENTI NON LOGGATI';
        exit;
    }

    require('./queryManager.php');

    $medName = $_GET['name'];
    $user = $_SESSION['username'];
    
    if(putMed($medName,$user))
    {
        // procedura andata a buon fine, allora re indirizzo alla pagina di successo
        
        header('location, ./../pages/bookSuccess.php');
        exit;
    }

    header('location, ./..')
    
?>