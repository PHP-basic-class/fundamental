<?php

class DB
{
    public $host = "localhost";
    public $dbname = "first";
    public $user = "nineproblem";
    public $password = "smile";
    public $port = 3306;
    public $pdo;
    public function __construct()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
