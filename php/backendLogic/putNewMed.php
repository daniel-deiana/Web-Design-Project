<?php
    // inserisce un nuovo medicinale nella lista dei medicinali disponibili in farmacia

    session_start();

    
    $name = $_POST['nome'];
    $description = $_POST['descrizione'];




    $price = $_POST['prezzo'];


        $uploaddir = './';
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);


        print_r($_FILES);

        $tmp = basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'],"./../../img/".$tmp)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Upload failed";
        }
    
    
    /* 
    if(!move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']))
        {
        $_SESSION['err_msg'] = 'err_img_load';
        header('location: ./../pages/homePage.php');
        exit;
        } */
    
    if ($_SESSION['usrtype'] != 'farmacista') {
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // insertNewMed($name,$description,$price,$img_name);

?>