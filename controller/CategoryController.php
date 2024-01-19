<?php 
require_once "../helper/database.php";
require_once "../helper/redirect.php";
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

    public function store ($request)
    {
        $categoryModel = new Category();
        $categoryModel->create($request);
        redirect("/categories");
    }

    public function edit ($id)
    {
        $categoryModel = new Category();
        $category = $categoryModel->first($id);
        return ["categories" => $category];
    }

    public function update ($request, $id)
    {
        $categoryModel = new Category();
        $categoryModel->update($request, $id);
        redirect("/categories");
    }

    public function destroy ($id)
    {
        $categoryModel = new Category();
        $category = $categoryModel->delete($id);
        redirect("/categories");
    }
}