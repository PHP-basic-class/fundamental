<?php 
require_once "../model/Category.php";
require_once "../model/Product.php";
class CategoryController extends DB
{
    public function index (){
        $productModel = new Product();
        $products = $productModel->all();
        $categoryModel = new Category();
        $categories = $categoryModel->all();
        return ["products" => $products, "categories" => $categories];
    }
}

