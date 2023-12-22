<?php
    require_once "../controller/CategoryController.php";
    $controller = new CategoryController();
    $controller->update($_GET["id"], $_POST);
