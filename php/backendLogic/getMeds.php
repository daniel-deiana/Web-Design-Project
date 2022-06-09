<?php

    require('./queryManager.php');

    session_start();

    if(!isset($_SESSION['username']))
    {
        echo 'CONTENUTO VIETATO AD UTENTI NON LOGGATI';
        $_SESSION['err_msg'] = 'err_permessi';
        
        header('location: ./../pages/homePage.php');
        exit;
    }


    $result = getMeds($_GET['start']);
    
    echo json_encode($result);
?>