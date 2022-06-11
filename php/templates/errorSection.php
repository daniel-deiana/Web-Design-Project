


<?php

    // sezione che viene caricata nella homePage in presenza di errori
    // viene preso dall'array definito in errorConst.php il relativo messaggio di errore e mostrato all'utente

    require './../inc/errorConst.php';

    session_start();

    $messaggio_errore = $error_list[$_SESSION['err_msg']];
    echo "<div id = 'container-err'>".$messaggio_errore.'</div>';

    $_SESSION['err_msg'] = null;
?> 


