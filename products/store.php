<?php
require_once "../controller/ProductController.php";

#Store Products
$controller = new ProductController();
$controller->store($_POST);
