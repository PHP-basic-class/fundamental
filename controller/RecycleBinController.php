<?php 

require_once "../helper/database.php";

class RecycleBinController extends DB
{
    public function products () 
    {
        $statement = $this->pdo->query("SELECT * FROM `products` WHERE `deleted_at` IS NOT NULL");
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function recoverProduct ()
    {
        
    }
}