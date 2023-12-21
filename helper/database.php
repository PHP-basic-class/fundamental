<?php 

class DB 
{
    public $host = "127.0.0.1";
    public $dbname = "first";
    public $user = "root";
    public $password = "admin";
    public $port = 3306;
    public $pdo;
    public function __construct()
    {
        try {
            $pdo = new PDO ("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>