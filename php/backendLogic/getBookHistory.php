<?php


    require('./queryManager.php');
    require_once './../inc/errorConst.php';

    session_start();

    // check privilegi

    check_login();

    // prendo la history di prenotazioni relativa all utente associato alla sessione
    $user = $_SESSION['username'];

    echo json_encode(getBookHistory($user));

?>