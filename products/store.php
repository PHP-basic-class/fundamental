<?php 
require_once "../controller/ProductController.php";
$controller = new ProductController();
$controller->store($_POST);


