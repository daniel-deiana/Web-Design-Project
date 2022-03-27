<?php

    // include classes, utilities for DB
    require_once './../backendLogic/dbConnections.php';

    // get input values 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connesione al db 
    $conn = new dbManager;
    $result = $conn->openConnection();
    echo $result;
    
    // redirect all'homepage 
    
        // errrore

    
    // funzione che si occupa di gestire la logica per la procedura di login
    function loginCheck($username, $password) {

    }
?>