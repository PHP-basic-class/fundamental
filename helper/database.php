<?php

class DB
{
    public static $pdo;
    public static function connect()
    {
        $host = "127.0.0.1";
        $dbname = "first";
        $user = "root";
        $password = "admin";
        /* This save times, no edit just remove
        $host = "localhost";
        $password = "root12345";
        */
        $port = 3306;
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
