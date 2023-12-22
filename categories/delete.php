<?php
require_once "../controller/CategoriesController.php";
$controller = new CategoriesController();
$controller->destroy($_GET["id"]);