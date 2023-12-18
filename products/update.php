<?php 
require_once "../controller/ProductController.php";

$controller = new ProductController();
$controller->update($_POST, $_GET["id"]);

