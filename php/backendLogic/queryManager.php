<?php

    // This file contains all queries used to retrieve/modify data on MySql database
    require_once './../backendLogic/dbConnections.php';

    // funzione di conversione da oggetto SQL ad array
    function SQLconvertObject($SQLresult) {
        return $SQLresult->fetch_all(MYSQLI_ASSOC);
    }

    //funzione che istanzia una sessione per un utente
    function setupSession() {}

    function getMeds($firstID) {
        global $dbConn;

        $queryText = "  SELECT F.*
                        FROM farmaco F
                        WHERE F.id > {$firstID};
                    ";
        
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();
        
        return SQLconvertObject($queryResult);
    }
?>  