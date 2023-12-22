<?php 
require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$controller->categoryDestroy($_GET["id"]);
?>

