<?php

    session_start();

    // include classes, utilities for DB
    require_once './../backendLogic/dbConnections.php';
    require_once './../backendLogic/queryManager.php';
    
    if (loginChecker()) 
        {
            header('location: ./../pages/homePage.php');
            exit;
        }
    else
        {
            // erorre, login non andato a buon fine
            $_SESSION['err_msg'] = 'err_login_1';
            header('location: ./../pages/homePage.php');
            exit;
        }
        
    function loginChecker() {
           
        // controllo sul login di un utente

        $userHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        
        global $dbConn;
        $queryText = "  SELECT U.*
                        FROM utente U
                        WHERE U.username = \"{$_POST['username']}\";
                    ";
                                
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();
        
        
        $array_user = SQLconvertObject($queryResult);


        if (mysqli_num_rows($queryResult) != 0 
            && password_verify($_POST['password'],$array_user[0]['hashvalue'])) {
        
            // setto le variabili di sessione

            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['usrtype'] = $array_user[0]['tipo']; 
            return true;
        }
        else 
            return false;
    }

?> 