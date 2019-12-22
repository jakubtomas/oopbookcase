<?php

class database
{

    protected $host = "localhost";
    protected $dbname = "bookcase";
    protected $user = "root";
    protected $pass = "";
    protected $conn;


    function __construct()
    {
        try {

            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        } catch (PDOException $e) {

            echo $e->getMessage();
        }

        return $this->conn;
    }

    public function closeConnection()
    {
        $this->conn = NULL;
    }

    /**
     * @return PDO
     */
    public function getconn(): PDO
    {
        return $this->conn;
    }

    /**
     * @return string
     */
    public function getDbname(): string
    {
        return $this->dbname;
    }


    public function getdata() {
        return $this->conn->query("SELECT * FROM books")->fetchAll(PDO::FETCH_ASSOC);
    }


}