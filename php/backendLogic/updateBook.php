<?php 
    // aggiorna i valori 

    require_once './queryManager.php';
    
    // aggiorna lo stato della prenotazione

    

    echo updateBookState($_POST['codice'],$_POST['stato']);
?>