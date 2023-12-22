<?php 
require_once "../controller/CategoriesController.php";
$controller = new CategoriesController();
$controller->update($_POST, $_GET["id"]);