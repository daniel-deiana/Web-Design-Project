<?php


    require('./queryManager.php');

    session_start();

    $result = getMeds($_GET['startID']);
    
    echo json_encode($result);
?>