<?php

require_once "../controller/CategoryController.php";
$controller = new CategoryController();
$category =$controller->update($_POST,$_GET["id"]);