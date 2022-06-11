<?php 
    
    // distruggo la sessione e ritorno alla homepage
    
    session_start();
    session_destroy();

    header('location: ./../pages/homePage.php');
?>