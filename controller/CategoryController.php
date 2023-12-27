<?php
require_once "../helper/database.php";
class CategoryController extends DB
{
    public function index()
    {
        $statement = $this->pdo->query("SELECT * FROM `categories`");
        $categories = $statement->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function store($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into categories
                    (name, created_at, updated_at)
                values 
                    (:name, now(), now());
            ");
            $statement->bindParam(":name", $request["name"]);

            if ($statement->execute()) {
                header("Location: http://localhost:8000/categories");
            } else {
                throw new Exception("Error while creating a new category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit ($id)
    {
        $statement = $this->pdo->prepare("select * from categories where id = :id");
        $statement->bindParam(":id", $id);
        if ($statement->execute()) {
            $category = $statement->fetch(PDO::FETCH_OBJ); 
            return $category;}
    }

    public function destroy($id)
    {
        try {
            $statement = $this->pdo->prepare("
                delete from categories
                where id = :id;
            ");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                header("Location: http://localhost:8000/categories/");
            } else {
                throw new Exception("Error while deleting a category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update ($request, $id)
    {
        $statement = $this->pdo->prepare("
        update categories 
            set 
                name = :name,
                updated_at = now()
            where id = :id
    "); 
    $statement->bindParam(":id", $id);
    $statement->bindParam(":name", $request["name"]);
    

    if ($statement->execute())
    {
        header("Location: http://localhost:8000/categories/");
    } else {
        throw new Exception("Error while updating categories!");
    }

    }

}
