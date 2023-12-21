<?php
require_once "../controller/CategoryController.php";

#Store Products
$controller = new CategoryController();
$controller->store($_POST);
