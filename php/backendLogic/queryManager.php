<?php

    // This file contains all queries used to retrieve/modify data on MySql database
    require_once './../backendLogic/dbConnections.php';

    function idFromMed($med)
    {
        global $dbConn;

        // prendo l'id del medicinale
        $queryText = "  SELECT F.id
                                FROM farmaco F
                                WHERE F.nome = \"{$med}\"; 
                            ";

        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();

        return SQLconvertObject($queryResult)[0]['id'];
    }

    // funzione di conversione da oggetto SQL ad array
    function SQLconvertObject($SQLresult) {
        return $SQLresult->fetch_all(MYSQLI_ASSOC);
    }

    //funzione che istanzia una sessione per un utente
    function setupSession() {}

    function getMeds($firstID) {
        global $dbConn;

        // debug
        $queryText = "  SELECT F.nome
                        FROM farmaco F
                        WHERE F.id > {$firstID};
                    ";
        
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();

        return SQLconvertObject($queryResult);
    }

    function getMedImage($name){
        global $dbConn;

        //   prima prendo il nome dell'immagine e poi lo vado a prendere nel file system del server

        $queryText = "  SELECT F.image_path
                        FROM farmaco F
                        WHERE F.nome = \"{$name}\"
                        LIMIT 1;
                    ";
        /* 
            ATTENZIONE: I file si trovano nella directory img dentro la directory "WebPharma", nel 
            db vengono salvati usanndo un path relativo rispetto alla cartella del progetto
        */

        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();

        $arr_result = SQLconvertObject($queryResult);

        // prendo l'immagine e la codifico in un formato standard
        $rawImage = file_get_contents($arr_result[0]['image_path']);
        return base64_encode($rawImage);
    
    }

    /*
        Funzione che ritorna tutte le informazioni relative ad un certo medicinale presente nel db
    */

    function getMedDetail($medName) {
        global $dbConn;

        $queryText = "  SELECT F.* 
                        FROM farmaco F
                        WHERE F.nome = \"{$medName}\"
                        LIMIT 1;
                    ";

        $queryResult = $dbConn->executeQuery($queryText);   
        $dbConn->close();

        return SQLconvertObject($queryResult);
    }

    /* Inserisce una prenotazione per un utente rispetto ad un certo medicinale */

    function putMed($med,$quantity,$user)
    {
        global $dbConn;
        
        $id = idFromMed($med);
        
        $data = date('F j, Y, g:i a');
    
        // inserisco la prenotazione 
        $queryText = "  INSERT INTO prenotazione(farmaco,utente,data,stato,quantita)
                        VALUES($id,\"{$user}\",\"{$data}\",'non ritirato',$quantity);
                    ";
        
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();  
        
        return $queryResult;
    }

    function getBookHistory($user) {
        global $dbConn;

        $queryText = "  SELECT F.nome, P.stato, P.data  
                        FROM prenotazione P
                        INNER JOIN farmaco F ON F.id = P.farmaco
                        WHERE P.utente = \"{$user}\"
                        ORDER BY P.data;
                    "; 

        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();
    
        return SQLconvertObject($queryResult);
    }

    function putReview($review,$user,$med) {

        global $dbConn; 

        $id = idFromMed($med);
        $data = date('F j, Y, g:i a');

        $queryText = "  INSERT INTO review(utente,farmaco,data,testo)
                        VALUES(\"{$user}\",\"$id\",\"{$data}\",\"{$review}\");
                    ";
        
        $queryResult = $dbConn->executeQuery($queryText);
        $dbConn->close();

        return $queryResult;
    }
?>
