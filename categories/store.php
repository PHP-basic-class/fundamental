<?php
   require_once "../controller/CategoriesController.php";
   $controller = new categoryController();
   $controller->store($_POST);
?>