<?php 

    require './queryManager.php';


    // mi prendo il nome dell'utente di cui voglio cercare le prenotazioni pendenti
    $name = $_GET['name'];

    echo json_encode(getBookRecords($name));
?>