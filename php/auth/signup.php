<?php

    // registration logic for the web app 

    require_once './../backendLogic/dbConnections.php';
    require_once './../backendLogic/queryManager.php';

    // get input values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // checks 

    // userame already existing     
    function signupCheckUsername($username) {
    // this function queries the db and checks if the username passed is already existing 
    

    }

    
?>