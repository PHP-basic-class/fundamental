<?php

require_once '../helper/database.php';

class ProductController extends DB
{
    # Get All Products
    public function index()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM products");
            $products = $stmt->fetchAll(PDO::FETCH_OBJ);
            if ($products) {
                return $products;
            } else {
                throw new Exception('Error on getting all products!');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    # Store Product
    public function store($request)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO products (name, price, stock , category , created_at, updated_at) VALUES (:name, :price , :stock, :category, now() , now())");
            $products = $stmt->fetchAll(PDO::FETCH_OBJ);
            $stmt->bindParam(':name', $request['product_name']);
            $stmt->bindParam(':price', $request['product_price']);
            $stmt->bindParam(':stock', $request['product_amount']);
            $stmt->bindParam(':category', $request['category']);
            if ($stmt->execute()) {
                $message = "Successfully created a new product!";
                $name = $request['product_name'];
                header("Location:http://localhost:3000/products/index.php?message=$message&product_name=$name&type=store");
            } else {
                throw new Exception('Error on product creating!');
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    # Edit Product
    public function edit($id)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = (:id)");
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                $product = $stmt->fetch(PDO::FETCH_OBJ);
                return $product;
            } else {
                throw new Exception('Error on show edit page!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    # Update Product
    public function update($request)
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE products SET name = :name , price = :price , stock = :stock , category = :category , created_at = :created_at , updated_at = now() WHERE id = :id");
            $stmt->bindParam(':id', $request['id']);
            $stmt->bindParam(':name', $request['product_name']);
            $stmt->bindParam(':price', $request['product_price']);
            $stmt->bindParam(':stock', $request['product_amount']);
            $stmt->bindParam(':category', $request['category']);
            $stmt->bindParam(':created_at', $request['created_at']);
            if ($stmt->execute()) {
                $message = "Successfully updated a product!";
                $name =  $request['product_name'];
                header("Location:http://localhost:3000/products/index.php?message=$message&product_name=$name&type=update");
            } else {
                throw new Exception('Error on product updating!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    # Destroy Product
    public function destroy($id)
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM products WHERE id=(:id)");
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                $message = "Successfully deleted a product!";
                $name = $_GET['name'];
                header("Location:http://localhost:3000/products/index.php?product_name=$name&message=$message&type=delete");
            } else {
                throw new Exception('Error on product deleting!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
#Categories
class CategoryController extends DB{
    # store categories
    public function store($request){
        try{
            $stmt = $this->pdo->prepare("INSERT INTO categories (name, created_at, updated_at) VALUES (:name, now() , now())");
            $categories = $stmt->fetch(PDO::FETCH_OBJ);
            $stmt->bindParam(':name', $request['product_name']);
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
            $stmt = $this->pdo->prepare("SELECT * FROM categories WHERE id = (:id)");
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
}
