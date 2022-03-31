<?php
    // registration logic for the web app 

    require_once './../backendLogic/dbConnections.php';
    require_once './../backendLogic/queryManager.php';

    // get input values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // controlla se l'utente sia gia registrato
    if (!signupCheckUsername()) {    
        // stampo la pagina di user gia esistente ed esco
        echo 'L\'utente è gia registrato';
        exit;
    }

    // Controllo validità valori passati nel form
    if (signupFormChecker()) {

        // redirect a succesfully signup
        header('location') 
    }
    else {
        
        // valori del form non corretti

    }

    function signupCheckUsername()
    {        
        global $dbConn;

        // this function queries the db and checks if the username passed is already existing     
        
        $queryText =    "   SELECT username 
                            FROM utente
                            WHERE username = \"{$_POST['username']}\";
                        ";

        $queryResult = $dbConn->executeQuery($queryText);
        $queryResult = mysqli_num_rows($queryResult);
        $dbConn->close();

        // controllo se vi sono risultati che fanno match con l'user passato in ingresso
        
        if ($queryResult != 0)
            return false;
        else
            return true;
    }


    // Esegue un checking dei valori passati in ingresso dall'utente

    function signupFormChecker() {  
        if ($_POST['username'] = "" || !preg_match("/^[A-Za-z ,.'-]/",$_POST['username'])) return false;
        echo 'Usenarname corretto';
        
        if ($_POST['username'] = "" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) return false;
        echo 'E-Mail corretta';
        
        if (strlen($_POST['telefono']) != 9 || !preg_match("/^[0-9]/",$_POST['telefono']))
        echo 'Numero di telefono corretto';
        
        if (strlen($_POST['password']) < 8 || $_POST['password'] != $_POST['checkPassword']) return false;
        echo 'Password corretta';
        
        return true;
    }
?>