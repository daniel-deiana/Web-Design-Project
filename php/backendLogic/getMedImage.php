<?php

/*
    si prende il nome dell immagine passato nel body della richiesta ajax 
    ed esegue una query al db per ottenere il binary dell'immagine in formato base64
    */

    require("./queryManager.php");
    require_once 'dbConnections.php';
    require_once './../inc/errorConst.php';

    session_start();

    //check privilegi
    check_login();

    global $dbConn;

    $imageName = $dbConn->filter($_GET['name']);
    $encodedImage = getMedImage($imageName);
    
    echo $encodedImage;
?>