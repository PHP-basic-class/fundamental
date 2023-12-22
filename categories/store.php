<?php
   require_once "../controller/CategoriesController.php";
   $controller = new CategoriesController();
   $controller->store($_POST);
?>