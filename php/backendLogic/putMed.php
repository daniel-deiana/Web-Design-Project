<?php

    /* 
        questa funzione si occupa di inserire una prenotazione 
        per un medicinale relativamente ad un certo utente
    */

    require_once './cartManager.php';
    require_once './dbConnections.php';

    session_start();

    if(!isset($_SESSION['username']))
    {
        $_SESSION['err_msg'] = 'err_permessi';  
        header('location: ./../pages/homePage.php');
        exit;
    }

    if(!isset($_SESSION['cart']))
    {
        $_SESSION['err_msg'] = 'err_book';        
        header('location: ./../pages/homePage.php');
        exit;
            
    }

    if($_SESSION['usrtype'] == 'farmacista') {
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // mi vado a prendere tutti i farmaci e inserisco nelle prenotazioni dell' utente
    $arrayItem = unserialize($_SESSION['cart']);

    if (!$arrayItem->book())
    {
        $_SESSION['err_msg'] = 'err_book';
        header('location: ./../pages/homePage.php');
        exit;
    }

    $_SESSION['cart'] = null;

    header('location: ./../pages/cartPage.php')
?>