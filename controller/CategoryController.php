<?php 
require_once "../model/Category.php";

class CategoryController extends DB
{
    public function index ()
    {
        $catgories = new Category();
        return $catgories->all();
    }
}