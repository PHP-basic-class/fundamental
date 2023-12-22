<?php 

class DB 
{
    public $host = "localhost";
    public $dbname = "fundamental";
    public $user = "root";
    public $password = "shein";

    public $pdo;
    public function __construct()
    {
        try {
            $pdo = new PDO ("mysql:dbhost=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}