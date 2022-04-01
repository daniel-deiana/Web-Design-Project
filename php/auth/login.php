<?php

    // include classes, utilities for DB
    require_once './../backendLogic/dbConnections.php';
    require_once './../backendLogic/queryManager.php';
    
    if (loginChecker()) 
        return header('location: ./../pages/homePage.php');
    
    return header('location: ./../pages/loginPage.php');

    
    function loginChecker() {
        
        // check SQLinjection    
        $userHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // query the db and confront values 
        global $dbConn;
        $queryText = "  SELECT U.username, U.hashvalue
                        FROM utente U
                        WHERE U.username = \"{$_POST['username']}\";
                    ";
                                
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();
        
        //  
        $array_user = SQLconvertObject($queryResult);

        if (mysqli_num_rows($queryResult) != 0 && password_verify($_POST['password'],$array_user[0]['hashvalue'])) {
            
            // user session setup 
            session_start();
            $_SESSION['username'] = $_POST['username'];
            return true;
        }
        else 
            return false;
    }

?> 