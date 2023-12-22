<?php 
require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$controller->categoryStore($_POST);


?>