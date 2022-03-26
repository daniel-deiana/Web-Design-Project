<?php

require_once './../inc/config.php'; // questo file contiene classi e metodi per stabilire le connesioni con il database MySQL 
class dbManager
{
    private $dbConnection = null;

    function openConnection()
    {

        global $hostname;
        global $dbPassword;
        global $dbName;

        $this->dbConnection = new mysqli($hostname, $dbPassword, $dbName);

        if ($this->dbConnection->connect_error) {
            die("Connection failed: " . $this->dbConnection->connect_error);
        }
        echo "Connected successfully";
    }
}
