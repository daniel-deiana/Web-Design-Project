<?php 
    
    // destroys the session and redirect to homepage
    session_start();
    session_destroy();

    header('location: ./../pages/homePage.php');
?>