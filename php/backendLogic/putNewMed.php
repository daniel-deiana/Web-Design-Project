<?php
// inserisce un nuovo medicinale nella lista dei medicinali disponibili in farmacia

    require './queryManager.php';
    require './utilities.php';

    $name = $_POST['nome'];
    $description = $_POST['descrizione'];
    $price = $_POST['prezzo'];

    $img_name = $_FILES['img']['name'];


    if ($_SESSION['usrtype'] != 'farmacista') {
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }
    // insertNewMed($name,$description,$price,$img_name);

    move_uploaded_file($_FILES['img']['tmp_name'],'./upload');
    
    // uploadMedImage($img);
?>