<?php 

    require './queryManager.php';

    session_start();

    // controllo permessi

    if(!isset($_SESSION['username']))
    {
        $_SESSION['err_msg'] = 'err_not_log';
        header('location: ./../pages/homePage.php');
        exit;
    }

    if($_SESSION['usrtype'] != 'farmacista') {
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // mi prendo il nome dell'utente di cui voglio cercare le prenotazioni pendenti
    $name = $_GET['name'];

    echo json_encode(getBookRecords($name));
?>