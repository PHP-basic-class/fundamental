<?php
require_once "../helper/database.php";

class categoryController extends DB{
    public function store($request){
        try{
            $statement = $this->pdo->prepare("
            insert into categories
                (name, created_at, updated_at)
            values
                (:name, now(), now())                
            ");

            $statement->bindParam(":name",$request["name"]);

           if( $statement->execute()){
                header("Location: http://127.0.0.1:8000/categories");
           }else{
                throw new Exception("Error while storing data to Database");
           }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>