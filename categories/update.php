<?php 
require_once "../controller/CategoryController.php";

$controller = new CategoryController();
$controller->categoryUpdate($_POST, $_GET["id"]);

