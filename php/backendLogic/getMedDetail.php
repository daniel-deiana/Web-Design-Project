<?php 
    
    require('./queryManager.php');

    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['err_msg'] = 'err_not_log';
        header('location: ./../pages/homePage.php');
        exit;
    }

    $medName = $_GET['medName'];

    echo json_encode(getMedDetail($medName));
?>