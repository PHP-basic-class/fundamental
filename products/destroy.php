<?php 
require_once "../controller/ProductController.php";
$controller = new ProductController();
$controller->destroy($_GET["id"]);


