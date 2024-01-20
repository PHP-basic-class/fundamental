<?php
require_once '../controller/RecycleBinController.php';

$controller = new RecycleBinController();
$controller->permanentDelete($_GET['id']);
