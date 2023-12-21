<?php
require_once "../controller/CategoryController.php";

#Destroy Categories
$controller = new CategoryController();
 $category= $controller->destroy($_GET['id']);
