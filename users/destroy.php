<?php 
require_once "../controller/UserController.php";
$controller = new UserController();
$controller->destroy($_GET["id"]);


