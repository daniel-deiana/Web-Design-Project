<?php
    // registration logic for the web app 

    require_once './../backendLogic/dbConnections.php';
    require_once './../backendLogic/queryManager.php';

    // get input values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    
    signupCheckUsername($username);
?>