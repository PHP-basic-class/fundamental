<?php 
require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$controller->destroy($_GET["id"]);


