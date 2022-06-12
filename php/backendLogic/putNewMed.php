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
        $prescrizione = $dbConn->filter($_POST['prescrizione']);

        $value = ($prescrizione == 'si')? 1 : 0;

        $uploaddir = './';
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);

        $tmp = basename($_FILES['img']['name']);

        // controllo tipo file
        $filename = $_FILES['img']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if ($ext !== 'png' && $ext !== 'jpeg') {
            $_SESSION['err_msg'] = 'err_img_type';
            header('location: ./../pages/homePage.php');
            exit;
        }

        // controllo dimensione file
        if ($_FILES['img']['size'] >= 400000)
        {
            $_SESSION['err_msg'] = 'err_img_size';
            header('location: ./../pages/homePage.php');
            exit;
        }

        // sposto il file nella directory del sito
        if (move_uploaded_file($_FILES['img']['tmp_name'],"./../../img/".$tmp)) {
            insertNewMed($name, $description, $price, $_FILES['img']['name'],$value);
            header('location: ./../pages/homePage.php');
        
        } else {
        
        $_SESSION['err_msg'] = 'err_img_load';
        header('location: ./../pages/homePage.php');
        exit;

        }
?>