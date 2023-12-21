<?php
require_once "../controller/CategoryController.php";

# Update Product
$controller = new CategoryController();
$controller->update($_POST);
