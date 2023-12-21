<?php 
require_once "../controller/RecycleBinController.php";

$controller = new RecycleBinController();
$controller->restoreCategory($_GET["id"]);

