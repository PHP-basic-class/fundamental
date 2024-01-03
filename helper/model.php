<?php
require_once "database.php";
class Model 
{
    protected $table;
    function __construct()
    {
        DB::connect();
    }

    protected function query($sql, $params = [])
    {
        $statement = DB::$pdo->prepare($sql);
        $statement->execute($params);
        return $statement;
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function first($data)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $params = [$data];
        $result = $this->query($sql, $params);
        return $result->fetch(PDO::FETCH_OBJ);
    }
}
