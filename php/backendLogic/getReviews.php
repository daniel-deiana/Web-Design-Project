<?php 

    require_once 'queryManager.php';

    session_start();
    
    if(!isset($_SESSION['username'])) {
        echo "ACCESSO NEGATO";
        exit;
    }

    $med = $_GET['medName'];

    $response = getReviews($med);

    echo json_encode($response);
?>