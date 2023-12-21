<?php 
require_once "../helper/database.php";
class CategoryController extends DB
{
    public function index ()
    {
        $statement = $this->pdo->query("SELECT * FROM `categories` WHERE `deleted_at` IS NULL");
        $categories = $statement->fetchAll(PDO::FETCH_OBJ); 
        return $categories;
    }

    public function store ($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into categories
                    (name, created_at, updated_at)
                values 
                    (:name, now(), now());
            "); 
            $statement->bindParam(":name", $request["name"]);

            if ($statement->execute())
            {
                header("Location: http://localhost:8000/categories");
            } else {
                throw new Exception("Error while creating a new category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function destroy ($id)
    {
        try {
            $statement = $this->pdo->prepare("
                update 
                    categories
                set 
                    deleted_at = now()
                where id = :id;
            "); 
            $statement->bindParam(":id", $id);
            if ($statement->execute())
            {
                header("Location: http://localhost:8000/categories/");
            } else {
                throw new Exception("Error while deleting a category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}