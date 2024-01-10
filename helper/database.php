<?php 

class DB 
{
    public static $pdo;
    public static function connect()
    {
        $host = "localhost";
        $dbname = "first";
        $user = "root";
        $password = "Butterflies123$";
        $port = 3306;
        try {
            $pdo = new PDO ("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}