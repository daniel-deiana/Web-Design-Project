<?php 

    require_once 'queryManager.php';

    session_start();

    if (!isset($_SESSION['username'])) {
    // se un utente prova ad accedervi quando non è loggato ho un errore
    $_SESSION['err_msg'] = 'err_permessi';
    header('location: ./../pages/homePage.php');
    exit;
    }   

  
    global $dbConn;
    $med = $dbConn->filter($_GET['medName']);

    $response = getReviews($med);

    echo json_encode($response);
?>