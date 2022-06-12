<?php 

    require './queryManager.php';

    require_once './dbConnections.php';
require_once './../inc/errorConst.php';

    global $dbConn;

    session_start();

    // controllo permessi

    check_login();

    check_privilege('farmacista');
    
    // mi prendo il nome dell'utente di cui voglio cercare le prenotazioni pendenti
    $name = $dbConn->filter($_GET['name']);
    

    echo json_encode(getBookRecords($name));
?>