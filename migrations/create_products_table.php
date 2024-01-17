<?php 

require_once __DIR__ . "/../helper/migration.php";

Migration::create_table(
    "CREATE TABLE `products` (
        `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL, 
        `image` VARCHAR(255) NOT NULL, 
        `description` VARCHAR(255) NOT NULL,
        `price` INT UNSIGNED NOT NULL, 
        `stock` INT UNSIGNED NOT NULL,
        `category_id` INT UNSIGNED NOT NULL,
        `created_at` TIMESTAMP NOT NULL, 
        `updated_at` TIMESTAMP NOT NULL,
        `deleted_at` TIMESTAMP
    );"
);