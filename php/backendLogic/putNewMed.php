<?php
// inserisce un nuovo medicinale nella lista dei medicinali disponibili in farmacia

        require_once 'queryManager.php';
        require_once 'dbConnections.php';


        global $dbConn;


        session_start();

        if ($_SESSION['usrtype'] != 'farmacista') {
            $_SESSION['err_msg'] = 'err_permessi';
            header('location: ./../pages/homePage.php');
            exit;
        }

        $name =  $dbConn->filter($_POST['nome']);
        $description = $dbConn->filter($_POST['descrizione']);
        $price = (int)$dbConn->filter($_POST['prezzo']);

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