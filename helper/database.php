<?php
// create table products(
//     id int unsigned not null primary key auto_increment,
//     name varchar(255) not null,
//     price int unsigned not null,
//     stock int unsigned not null,
//     category varchar(255) not null,
//     created_at date not null,
//     updated_at date not null);
class DB{
    public $host =  'localhost';
    public $db = 'testing';
    public $user = 'root';
    public $pass = 'admin';
    public $pdo;
    public function __construct(){
        try {
            $pdo = new PDO ("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
};