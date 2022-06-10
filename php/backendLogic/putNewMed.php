<?php
// inserisce un nuovo medicinale nella lista dei medicinali disponibili in farmacia

        require_once 'queryManager.php';
   
        session_start();

        if ($_SESSION['usrtype'] != 'farmacista') {
            $_SESSION['err_msg'] = 'err_permessi';
            header('location: ./../pages/homePage.php');
            exit;
        }

        $name = $_POST['nome'];
        $description = $_POST['descrizione'];
        $price = $_POST['prezzo'];


        $uploaddir = './';
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);

        $tmp = basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'],"./../../img/".$tmp)) {
            insertNewMed($name, $description, $price, $_FILES['img']['name']);
            header('location: ./../pages/homePage.php');
        
        } else {
        
        $_SESSION['err_msg'] = 'err_img_load';
        header('location: ./../pages/homePage.php');
        exit;

        }
?>