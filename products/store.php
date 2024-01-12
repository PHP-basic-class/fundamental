<?php 
require_once "../controller/ProductController.php";
$controller = new ProductController();
$_POST["image"] = $_FILES["image"];
$controller->store($_POST);


