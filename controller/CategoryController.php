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
     # store categories
     public function store($request){
        try{
            $stmt = $this->pdo->prepare("INSERT INTO categories (name, created_at, updated_at) VALUES (:name, now() , now())");
            $categories = $stmt->fetch(PDO::FETCH_OBJ);
            $stmt->bindParam(':name', $request['category_name']);
            if ($stmt->execute()) {
                header("location: $this->host");              
            } else {
                throw new Exception('Error on category creating!');
            }
        }catch(Exception $e){
            echo $e;
        }
    }
    #Edit Category
    public function edit($id)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM categories WHERE id = :id");
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                $category = $stmt->fetch(PDO::FETCH_OBJ);
                return $category;
            } else {
                throw new Exception('Error on show edit page!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    #Update Category
    public function update($request)
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE categories SET name = :name , created_at = :created_at , updated_at = now() WHERE id = :id");
            $stmt->bindParam(':id', $request['id']);
            $stmt->bindParam(':name', $request['category_name']);
            $stmt->bindParam(':created_at', $request['created_at']);
            if ($stmt->execute()) {
                $message = "Successfully updated a product!";
                $name =  $request['category_name'];
                header("Location:http://localhost:8000/products/index.php?message=$message&product_name=$name&type=update");
            } else {
                throw new Exception('Error on product updating!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
