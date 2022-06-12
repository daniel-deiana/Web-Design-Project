<?php

    /* 
        questa funzione si occupa di inserire una prenotazione 
        per un medicinale relativamente ad un certo utente
    */

    require_once './cartManager.php';
    require_once './dbConnections.php';
    require_once './../inc/errorConst.php';

    session_start();

    // controllo utente loggato
    check_login();


    // controllo se esiste il carrello
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['err_msg'] = 'err_book';        
        header('location: ./../pages/homePage.php');
        exit;
            
    }

    check_privilege('cliente');

    // mi vado a prendere tutti i farmaci e inserisco nelle prenotazioni dell' utente
    $arrayItem = unserialize($_SESSION['cart']);

    // errore
    if (!$arrayItem->book())
    {
        $_SESSION['err_msg'] = 'err_book';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // resetto il carrello
    $_SESSION['cart'] = null;

    header('location: ./../pages/cartPage.php')
?>