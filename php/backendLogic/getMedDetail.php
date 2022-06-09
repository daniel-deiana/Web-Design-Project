<?php 
    
    require('./queryManager.php');

    session_start();

    if (!isset($_SESSION['username'])) {
        echo 'CONTENUTO VIETATO AD UTENTI NON LOGGATI';
        
        exit;
    }
    
    $medName = $_GET['medName'];

    echo json_encode(getMedDetail($medName));
?>