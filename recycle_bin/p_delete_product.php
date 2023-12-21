<?php 
require_once "../controller/RecycleBinController.php";

$controller = new RecycleBinController();
$controller->permanentDeleteProduct($_GET["id"]);

