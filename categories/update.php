<?php
require_once "../controller/ProductController.php";

# Update Product
$controller = new ProductController();
$controller->update($_POST);
