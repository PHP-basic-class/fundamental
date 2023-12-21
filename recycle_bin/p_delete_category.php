<?php 
require_once "../controller/RecycleBinController.php";

$controller = new RecycleBinController();
$controller->permanentDeleteCategory($_GET["id"]);

