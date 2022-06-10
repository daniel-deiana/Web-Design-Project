<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        echo 'ACCESSO NEGATO AD UTENTI NON LOGGATI';
        exit;
    }
    
    $echoString = '<script>
                            let medName = "'.$_GET['medName'].'";
                            requestMedDetail(medName);
                  </script>';
    echo $echoString;
?>
<div class='container-form' id='med-details'>
    
</div>