<?php 

require_once "../helper/database.php";

class RecycleBinController extends DB
{
    public function products () 
    {
        return $this->pdo->query("SELECT * FROM `products` WHERE `deleted_at` IS NOT NULL")->fetchAll(PDO::FETCH_OBJ);
    }

    public function recoverProduct ()
    {
        
    }
}