<?php
require_once "../helper/database.php";

class categoryController extends DB{
    public function store($request){
        try{
            $statement = $this->pdo->prepare("
            insert into categories
                (name, price, stock, category, created_at, updated_at)
            values
                (:name, :price, :stock, :category, now(), now())                
            ");

            $statement->bindParam(":name",$request["name"]);
            $statement->bindParam(":price",$request["price"]);
            $statement->bindParam(":stock",$request["stock"]);
            $statement->bindParam(":category",$request["category"]);

           if( $statement->execute()){
                header("Location: http://localhost:8000/categories");
           }else{
                throw new Exception("Error while storing data to Database");
           }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>