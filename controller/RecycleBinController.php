<?php

require_once "../helper/database.php";
require_once '../model/Product.php';
require_once '../model/Category.php';
require_once '../helper/redirect.php';

class RecycleBinController extends DB
{
    public function products()
    {
        $productModal = new Product();
        $products = $productModal->allWithSoftDelete();
        $categoryModal = new Category();
        $categories = $categoryModal->all();
        foreach ($categories as $category) {
            for ($i = 0; $i < count($products); $i++) {
                if ($products[$i]->category_id == $category->id) {
                    $products[$i]->category_name = $category->name;
                }
            }
        }
        return $products;
    }

    public function recoverProduct($id)
    {
        $productModal = new Product();
        $productModal->recoverDelete($id);
        redirect('/recycle_bin/products.php');
    }
    public function permentallyDelete($id){
        $productModal = new Product();
        $productModal->perDelete($id);
        redirect('/recycle_bin/products.php');
    }
}



