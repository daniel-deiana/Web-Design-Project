<?php   

    require_once 'queryManager.php';
    require_once 'dbConnections.php';
    session_start();

    global $dbConn;

    if (!isset($_SESSION['username'])) {
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // sanificare input da injection
    $review = $dbConn->filter($_POST['reviewText']);

    $med = $dbConn->filter($_SESSION['med']);
    $_SESSION['med'] = null; 

    if(!checkBookHistory($med, $_SESSION['username'])){
        $_SESSION['err_msg'] = 'err_review_1';
        header('location: ./../pages/homePage.php');
        exit;
    }
    
    if (checkReview($med,$_SESSION['username']) ) {
        $_SESSION['err_msg'] = 'err_review_2';
        header('location: ./../pages/homePage.php');
        exit;
    };

    putReview($review,$_SESSION['username'],$med);

    header("location: ./../pages/medPage.php?medName=".$med);

?>