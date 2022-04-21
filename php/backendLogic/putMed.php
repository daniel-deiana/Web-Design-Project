<?php

/* 
        questa funzione si occupa di inserire una prenotazione 
        per un medicinale relativamente ad un certo utente
    */

    require_once './cartManager.php';
    require_once './dbConnections.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        // non posso prenotare un farmaco se non sono loggato
        echo 'ACCESSO NEGATO AD UTENTI NON LOGGATI';
        exit;

    }

    if(!isset($_SESSION['cart']))
    {
        echo 'cazzi';
        exit;
    }

    // mi vado a prendere tutti i farmaci e inserisco nelle prenotazioni dell' utente

    $arrayItem = unserialize($_SESSION['cart']);
    $arrayItem->book();

    $_SESSION['cart'] = null;

    header('location: ./../pages/cartPage.php')

?>
