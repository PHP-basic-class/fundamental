<?php 
require_once "../helper/database.php";
class ProductController extends DB
{
    public function index ()
    {
        $statement = $this->pdo->query("SELECT * FROM `products` WHERE `deleted_at` IS NULL");
        $products = $statement->fetchAll(PDO::FETCH_OBJ); 
        return $products;
    }

    public function create () 
    {
        return $this->pdo->query("SELECT * FROM `categories`")->fetchAll(PDO::FETCH_OBJ);
    }

    public function store ($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into products
                    (name, price, stock, description, category_id, created_at, updated_at)
                values 
                    (:name, :price, :stock, :description, :category_id, now(), now());
            "); 
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":price", $request["price"]);
            $statement->bindParam(":stock", $request["stock"]);
            $statement->bindParam(":description", $request["description"]);
            $statement->bindParam(":category_id", $request["category_id"]);

            if ($statement->execute())
            {
                header("Location: http://localhost:8000/products");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit ($id)
    {
        try {
            $db = new DB();
            $statement = $db->pdo->prepare("select * from products where id = :id");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                $product = $statement->fetch(PDO::FETCH_OBJ); 
                $categories = $this->pdo->query("SELECT * FROM `categories`")->fetchAll(PDO::FETCH_OBJ);
                $result = ["product" => $product, "categories" => $categories];
                return $result;
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
                update products 
                    set 
                        name = :name, 
                        price = :price, 
                        stock = :stock, 
                        description = :description,
                        category_id = :category_id,
                        created_at = :created_at,
                        updated_at = now()
                    where id = :id
            "); 
            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":price", $request["price"]);
            $statement->bindParam(":stock", $request["stock"]);
            $statement->bindParam(":description", $request["description"]);
            $statement->bindParam(":category_id", $request["category_id"]);
            $statement->bindParam(":created_at", $request["created_at"]);

            if ($statement->execute())
            {
                header("Location: http://localhost:8000/products/");
            } else {
                throw new Exception("Error while updating product!");
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
                    products
                set 
                    deleted_at = now()
                where id = :id;
            "); 
            $statement->bindParam(":id", $id);
            if ($statement->execute())
            {
                header("Location: http://localhost:8000/products/");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}