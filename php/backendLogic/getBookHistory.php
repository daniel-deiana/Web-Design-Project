<?php


    session_start();


    if (!isset($_SESSION['username']))
    {
        echo 'ACCESSO NEGATO AD UTENTI NON LOGGATI';
        exit;
    }   

    $user = $_SESSION['username'];

    getBookHistory($user);    

?>