<?php   

    require_once 'queryManager.php';
    require_once 'dbConnections.php';

    global $dbConn;

    session_start();

    if (!isset($_SESSION['username'])) {
        echo "ACCESSO NEGATO";
        exit;
    }

    // sanificare input da injection
    $review = $_POST['reviewText'];


    $med = $_SESSION['med'];
    $_SESSION['med'] = null; 

    if(checkBookHistory($med, $_SESSION['username'])){
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