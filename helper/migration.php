<?php 

require_once __DIR__ . "/database.php";

class Migration 
{
    public static function create_table ($sql)
    {
        DB::connect();
        try {
            DB::$pdo->query($sql);
            echo "Table has been created successfully!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}