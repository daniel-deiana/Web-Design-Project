<?php

    require('./queryManager.php');

    session_start();

    if(!isset($_SESSION['username']))
    {
        // se un utente prova ad accedervi quando non è loggato ho un errore
        $_SESSION['err_msg'] = 'err_permessi';    
        header('location: ./../pages/homePage.php');
        exit;
    }

    $result = getMeds((int)$_GET['start']);
    
    echo json_encode($result);
?>