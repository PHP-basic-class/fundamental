<?php
require_once "../controller/ProductController.php";

#Store Products
$controller = new CategoryController();
$controller->store($_POST);
