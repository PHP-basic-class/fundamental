<?php 
require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$controller->store($_POST);


