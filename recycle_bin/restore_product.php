<?php 
require_once "../controller/RecycleBinController.php";

$controller = new RecycleBinController();
$controller->restoreProduct($_GET["id"]);

