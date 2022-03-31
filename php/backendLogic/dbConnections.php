<?php

    require_once './../inc/config.php'; // questo file contiene classi e metodi per stabilire le connesioni con il database MySQL 
    
    $dbConn = new dbManager();  // questo istanzia una connesione con il db WebPharma

    class dbManager {
        
        private $dbConnection = null;

        function dbManager() {
            $this->openConnection();
        }

        function openConnection()
        {

            global $hostname;
            global $dbPassword;
            global $dbUsername;
            global $dbName;

            $this->dbConnection = new mysqli($hostname, $dbUsername, $dbPassword);

            if ($this->dbConnection->connect_error) {
                die("Connection failed: " . $this->dbConnection->connect_error);
            }
            
            // seleziono il mio db
            $this->dbConnection->select_db($dbName) or die('Error selecting db');
            $this->dbConnection->set_charset("utf-8");
        }

        // check if connection exists
        function isAlive() {
            return ($this->dbConnection != null);
        }

        // executes a query on the db
        function executeQuery($queryText) {
            if (!$this->isAlive()) {
                $this->openConnection();
            }
            
            return $this->dbConnection->query($queryText);
        }

        // close connection with db
        function close() {
            if($this->dbConnection != null) {
                $this->dbConnection->close();
            }
            
            $this->dbConnection = null;
        }

    }
?>