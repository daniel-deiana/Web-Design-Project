<?php

    require_once './queryManager.php';

    if(!$_SESSION['username']){
        // utente non loggato non puo richiedere questo contenuto
        echo 'PERMESSO NEGATO';
        exit;
    }

    $startID = $_GET['startID'];
    $result = getMeds($startID);

    return json_encode($result);
?>