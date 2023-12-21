<?php 

require_once "../helper/database.php";
class RecycleBinController extends DB
{
    public function products () 
    {
       return $this->pdo->query("SELECT * FROM `products` WHERE `deleted_at` IS NOT NULL")->fetchAll(PDO::FETCH_OBJ);
     
    }
    public function categories () 
    {
       return $this->pdo->query("SELECT * FROM `categories` WHERE `deleted_at` IS NOT NULL")->fetchAll(PDO::FETCH_OBJ);
       
    }
    public function restoreProduct ($id)
    {
        try {
            $db = new DB();
            $statement = $db->pdo->prepare("
                update products 
                    set 
                       deleted_at = null
                    where id = :id
            "); 
            $statement->bindParam(":id", $id);

            if ($statement->execute())
            {
                header("Location: ../recycle_bin/products.php");
            } else {
                throw new Exception("Error restoring product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function restoreCategory ($id)
    {
        try {
            $db = new DB();
            $statement = $db->pdo->prepare("
                update categories 
                    set 
                       deleted_at = null
                    where id = :id
            "); 
            $statement->bindParam(":id", $id);

            if ($statement->execute())
            {
                header("Location: ../recycle_bin/categories.php");
            } else {
                throw new Exception("Error restoring category!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function permanentDeleteCategory($id){
      try {
         $db = new DB();
         $statement = $db->pdo->prepare("
             delete from categories 
                 where id = :id
         "); 
         $statement->bindParam(":id", $id);

         if ($statement->execute())
         {
             header("Location: ../recycle_bin/categories.php");
         } else {
             throw new Exception("Error restoring category!");
         }
     } catch (Exception $e) {
         echo $e->getMessage();
     }
    }
    public function permanentDeleteProduct($id){
      try {
         $db = new DB();
         $statement = $db->pdo->prepare("
             delete from products 
                 where id = :id
         "); 
         $statement->bindParam(":id", $id);

         if ($statement->execute())
         {
             header("Location: ../recycle_bin/products.php");
         } else {
             throw new Exception("Error restoring Product!");
         }
     } catch (Exception $e) {
         echo $e->getMessage();
     }
    }
}