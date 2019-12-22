<?php
/**
 * Created by PhpStorm.
 * User: install
 * Date: 22. 12. 2019
 * Time: 20:36
 */

class users
{
    protected $database;
    protected $conn;

        public function __construct()
        {
         $this->database = new  database();
         $this->conn = $this->database->getconn();
        }

    public function getuser()
    {
        return $this->conn->query("SELECT * FROM  users")->fetchAll(PDO::FETCH_ASSOC);
    }
}
