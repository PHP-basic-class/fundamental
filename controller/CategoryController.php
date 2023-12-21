<?php
require_once '../helper/database.php';

class CategoryController extends DB
{
    # Get All Categories
    public function index()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM categories");
            $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
            if ($categories) {
                return $categories;
            } else {
                throw new Exception('Error on getting all categories!');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
