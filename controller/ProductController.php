<?php 
require_once "../helper/database.php";
require_once "../helper/storage.php";
require_once "../helper/redirect.php";
require_once "../model/Product.php";
require_once "../model/Category.php";

class ProductController extends DB
{
    public function index ()
    {
        $products = new Product();
        $categories = new Category();

        return ["products" => $products->all(), "categories" => $categories->all()];
    }

    public function create () 
    {
        $categoryModel = new Category();
        return $categoryModel->all();
    }

    public function store ($request)
    {
        $productModel = new Product();
        $request["image"] = Storage::upload($request["image"]);
        $productModel->create($request);
        redirect("/products");
    }

    public function edit ($id)
    {
        $productModel = new Product();
        $product = $productModel->first($id);
        $categoryModel = new Category();
        $categories = $categoryModel->all();
        return ["product" => $product, "categories" => $categories];
    }

    public function update ($request, $id)
    {
        $productModel = new Product();
        $productModel->update($request, $id);
        redirect("/products");
    }

    public function destroy ($id)
    {
        $productModel = new Product();
        $productModel->softDelete($id);
        redirect("/products");
    }
}