<?php 
    // CODICE CHE AGGIORNA LO STATO DI UNA DETERMINATA PRENOTAZIONE

    require_once './queryManager.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        // se un utente prova ad accedervi quando non è loggato ho un errore
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    } 

    if(!isset($_POST['codice']) || !isset($_POST['stato']))
    {
        $_SESSION['err_msg'] = 'err_handle_book';
        header('location: ./../pages/homePage.php');
        exit;    
    }


    // aggiorna lo stato della prenotazione
    echo updateBookState($_POST['codice'],$_POST['stato']);
