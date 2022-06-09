<?php

    require './../inc/errorConst.php';

    session_start();

    $messaggio_errore = $error_list[$_SESSION['err_msg']];
    
    echo "<div id = 'container-form'>".$messaggio_errore.'</div>';

    $_
?> 


