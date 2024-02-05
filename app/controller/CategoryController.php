<?php 
require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ . "/../../helper/redirect.php";
class CategoryController extends DB
{
    public function index ()
    {
        $catgories = new Category();
        View::render('categories/index', $catgories->all());
    }

    public function create ()
    {
        View::render('categories/create');
    }

    public function store ($request)
    {
        $categoryModel = new Category();
        $categoryModel->create($request);
        redirect("/categories");
    }

    public function edit ($param)
    {
        $categoryModel = new Category();
        $category = $categoryModel->first($param['id']);
        View::render('categories/edit', ['category' => $category]);
    }

    public function update ($request, $param)
    {
        $categoryModel = new Category();
        $categoryModel->update($request, $param['id']);
        redirect("/categories");
    }

    public function destroy ($param)
    {
        $categoryModel = new Category();
        $category = $categoryModel->delete($param['id']);
        redirect("/categories");
    }
}