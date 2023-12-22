<?php
    require_once("../helper/database.php");
    
    class CategoriesController extends DB{
        function index(){
            $statement = $this->pdo->query('select * from categories');
            $products = $statement->fetchAll(PDO::FETCH_OBJ);
            return $products;
        }

        function store($request){
            try{
                $statement = $this->pdo->prepare('
                    INSERT INTO categories (name, created_at, updated_at)
                    VALUES (:name, NOW(), NOW());
                ');
                $statement->bindParam(':name', $request["name"]);
                if($statement->execute()){
                    header("Location: http://localhost:8080/categories/index.php");
                }else{
                    throw new Exception("Error Occurs creating categories");
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>