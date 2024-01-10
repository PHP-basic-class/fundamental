<?php 

class DB 
{
    public static $pdo;
    public static function connect()
    {
        $host = "localhost";
        $dbname = "testing";
        $user = "root";
        $password = "admin";
        try {
            $pdo = new PDO ("mysql:host=$host;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}