<?php

class Connection
{

    protected $host = "localhost";
    protected $dbname = "bookcase";
    protected $user = "root";
    protected $pass = "root";
    protected $DBH;


    function __construct()
    {
        try {

            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->DBH = NULL;
    }


    public function getDBH(): PDO
    {
        return $this->DBH;
    }
}