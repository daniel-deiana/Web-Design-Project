<?php

    require('./queryManager.php');
    require_once './../inc/errorConst.php';


    session_start();

    // check privilegi
    check_login();

    // richiede oggetti farmaci
    $result = getMeds((int)$_GET['start']);
    
    echo json_encode($result);
?>