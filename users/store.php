<?php 
require_once "../controller/UserController.php";
$controller = new UserController();
$controller->store($_POST);


