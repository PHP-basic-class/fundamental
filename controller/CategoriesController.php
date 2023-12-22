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
                    INSERT INTO categories (name)
                    VALUES (:name);
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

        function edit($id)
        {
            try {
                $db = new DB();
                $statement = $db->pdo->prepare("SELECT * FROM categories WHERE id = :id");
                $statement->bindParam(":id", $id);
                if ($statement->execute()) {
                    $category = $statement->fetch(PDO::FETCH_OBJ); 
                    return $category;
                } else {
                    throw new Exception("Error!");
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function update ($request, $id)
        {
            try {
                $db = new DB();
                $statement = $db->pdo->prepare("
                    update categories 
                        set 
                            name = :name
                        where id = :id
                "); 
                $statement->bindParam(":id", $id);
                $statement->bindParam(":name", $request["name"]);

                if ($statement->execute())
                {
                    header("Location: http://localhost:8000/categories");
                } else {
                    throw new Exception("Error while updating product!");
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
?>