<?php 
    // aggiorna i valori 

    require_once './queryManager.php';


    if (!isset($_SESSION['username'])) {
        // se un utente prova ad accedervi quando non è loggato ho un errore
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    
    // aggiorna lo stato della prenotazione
    echo updateBookState($_POST['codice'],$_POST['stato']);
?>