<?php 
require_once "../controller/UserController.php";

$controller = new UserController();
$controller->update($_POST, $_GET["id"]);

