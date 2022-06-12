<?php 

    require_once 'queryManager.php';
    require_once './../inc/errorConst.php';

    session_start();

    // check privilegi
    check_login();

  
    // richiede review per un farmaco
    global $dbConn;
    $med = $dbConn->filter($_GET['medName']);

    $response = getReviews($med,$_GET['position']);

    echo json_encode($response);
?>