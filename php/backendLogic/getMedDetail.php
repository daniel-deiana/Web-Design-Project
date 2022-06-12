<?php 
    
    require('./queryManager.php');
    require_once './../inc/errorConst.php';

    session_start();

    check_login();
    

    global $dbConn;

    $medName = $dbConn->filter($_GET['medName']);

    echo json_encode(getMedDetail($medName));
?>