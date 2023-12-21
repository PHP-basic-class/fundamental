<?php
   require_once "../controller/CategoryController.php";
   $controller = new categoryController();
   $controller->store($_POST);
?>