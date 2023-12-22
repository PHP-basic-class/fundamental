<?php 
require_once "../helper/categoryDatabase.php";
class CategoryController extends CDB
{
    public function categoryIndex ()
    {
        $statement = $this->pdo->query("select * from category;");
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function categoryStore ($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into category
                    (name, created_at, updated_at)
                values 
                    (:name, now(), now());
            "); 
            $statement->bindParam(":name", $request["name"]);

            if ($statement->execute())
            {
                header("Location: http://localhost:8000/categories");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function categoryEdit ($id)
    {
        try {
            $db = new CDB();
            $statement = $db->pdo->prepare("select * from products where id = :id");
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
            $db = new DB();
            $statement = $db->pdo->prepare("
                update category 
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
                throw new Exception("Error while updating product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function categoryDestroy ($id)
    {
        try {
            $statement = $this->pdo->prepare("
                update 
                    category
                set 
                    deleted_at = now()
                where id = :id;
            "); 
            $statement->bindParam(":id", $id);
            if ($statement->execute())
            {
                header("Location: http://127.0.0.1:8000/categories");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}