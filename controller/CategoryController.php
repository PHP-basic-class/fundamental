<?php 
require_once "../helper/database.php";
class CategoryController extends DB
{
    public function index ()
    {
        return $this->pdo->query("SELECT * FROM `categories` WHERE `deleted_at` IS NULL")->fetchAll(PDO::FETCH_OBJ);
    }

    public function store ($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into categories
                    (name,created_at,updated_at)
                values 
                    (:name,now(), now());
            "); 
            $statement->bindParam(":name", $request["name"]);
        

            if ($statement->execute())
            {
            header("Location: ./");
            } else {
                throw new Exception("Error while creating a new category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit ($id)
    {
        try {
            $db = new DB();
            $statement = $db->pdo->prepare("select * from categories where id = :id");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                $product = $statement->fetch(PDO::FETCH_OBJ); 
                return $product;
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
                        name = :name, 
                        updated_at = now()
                    where id = :id
            "); 
            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $request["name"]);
           

            if ($statement->execute())
            {
                header("Location: ../categories/");
            } else {
                throw new Exception("Error while updating category!");
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
                header("Location: ../categories/");
            } else {
                throw new Exception("Error while creating a new category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}