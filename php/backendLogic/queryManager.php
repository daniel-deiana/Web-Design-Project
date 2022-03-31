<?php

    // This file contains all queries used to retrieve/modify data on MySql database
    require_once './../backendLogic/dbConnections.php';

    // userame already existing     
    function signupCheckUsername($username)
    {
        global $dbConn;
        // this function queries the db and checks if the username passed is already existing     
        $queryText = '  SELECT U.* FROM utente U;
                    ';
        $queryResult = $dbConn->executeQuery($queryText);

        echo $queryResult;
    }
?>  