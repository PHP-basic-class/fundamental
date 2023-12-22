<?php
require_once "../helper/database.php";
class CategoryController extends DB
{
    public function index(){
            return $categories = $this->pdo->query("select * from categories")->fetchAll(PDO::FETCH_OBJ);
    }
    public function store($request){
        try {
            $statement = $this->pdo->prepare("
                insert into categories
                    (name, created_at, updated_at)
                values
                    (:name, now(), now())
            ");
            $statement->bindParam(":name", $request["name"]);
            if($statement->execute()){
                header("Location: http://localhost:8000/categories");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function edit($id){
        try {
            $statement = $this->pdo->prepare("select * from categories where id = :id");
            $statement->bindParam(":id" , $id);
            if($statement -> execute()){
                $category = $statement->fetch(PDO::FETCH_OBJ);
                return $category;
            }else{
                throw new Exception("Error");
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function update($id , $request){
        try {
            $statement = $this->pdo->prepare("
                update categories
                set
                    name = :name,
                    created_at = :created_at,
                    updated_at = now()
                where
                    id = :id;
            ");
            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $request["name"]);
            $statement->bindparam(":created_at", $request["created_at"]);

            if($statement->execute()){
                header("Location: http://localhost:8000/categories");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destroy($id){
        try {
            $statement = $this->pdo->prepare("delete from categories where id = :id");
            $statement->bindParam(":id", $id);
            if($statement->execute()){
                header("Location: http://localhost:8000/categories");
            }else{
                throw new Exception("can't create!");
            }
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}