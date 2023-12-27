<?php 

require_once "../helper/database.php";
class CategoryController extends DB
{
    public function index ()
    {
        return $this->pdo->query("select * from categories")->fetchAll(PDO::FETCH_OBJ);
    }
}