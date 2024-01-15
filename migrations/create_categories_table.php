<?php 

require_once __DIR__ . "/../helper/migration.php";

Migration::create_table(
    "CREATE TABLE `categories` (
        `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL, 
        `created_at` TIMESTAMP NOT NULL, 
        `updated_at` TIMESTAMP NOT NULL
    );"
);