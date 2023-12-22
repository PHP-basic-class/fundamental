<?php 
require_once "../helper/categoryDatabase.php";
class CategoryController extends CDB
{
    public function categoryIndex ()
    {
        $statement = $this->pdo->query("select * from categories");
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function categoryStore ($request)
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

    public function categoryEdit ($id)
    {
        try {
            $statement = $this->pdo->prepare("select * from categories where id = :id");
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

    public function categoryUpdate ($request, $id)
    {
        try {
            $statement = $this->pdo->prepare("
                update categories
                    set 
                        name = :name, 
                        created_at = :created_at,
                        updated_at = now()
                    where id = :id
            "); 
            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":created_at", $request["created_at"]);

            if ($statement->execute())
            {
                header("Location: http://localhost:8000/categories");
            } else {
                throw new Exception("Error while updating category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function categoryDestroy ($id)
    {
        try {
            $statement = $this->pdo->prepare("
                delete from categories where id =:id;
            "); 
            $statement->bindParam(":id", $id);
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
}