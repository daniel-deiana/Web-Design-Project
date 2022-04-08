<?php

    /*
    si prende il nome dell immagine passato nel body della richiesta ajax 
    ed esegue una query al db per ottenere il binary dell'immagine in formato base64
    */
    
    require("./queryManager.php");

    $imageName = $_POST['name'];
    $encodedImage = getMedImage($imageName);

    echo $encodedImage;
?>