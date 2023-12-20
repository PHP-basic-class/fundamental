<?php
require_once "../controller/ProductController.php";

#Destroy Products
$controller = new ProductController();
$controller->destroy($_GET['id']);
