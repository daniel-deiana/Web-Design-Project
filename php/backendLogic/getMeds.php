<?php

    require_once './queryManager.php';

    session_start();
    
    /* 
    if(!$_SESSION['username']){
        // utente non loggato non puo richiedere questo contenuto
        echo 'PERMESSO NEGATO';
        exit;
    } 
    */

    $result = getMeds($_GET['startID']);
    
    return json_encode($result);
?>