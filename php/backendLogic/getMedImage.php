<?php

/*
    si prende il nome dell immagine passato nel body della richiesta ajax 
    ed esegue una query al db per ottenere il binary dell'immagine in formato base64
    */

    require("./queryManager.php");


    /* if (!isset($_SESSION['username'])) {
        $_SESSION['err_msg'] = 'err_not_log';
        header('location: ./../pages/homePage.php');
        exit;
    } */

    $imageName = $_GET['name'];
    $encodedImage = getMedImage($imageName);
    
    echo $encodedImage;
?>