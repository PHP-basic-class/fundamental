<?php 

require_once __DIR__ . "/../helper/migration.php";

Migration::create_table(
    "CREATE TABLE `users`(
        `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, 
        `first_name` VARCHAR (100) NOT NULL, 
        `last_name` VARCHAR (100), 
        `user_name` VARCHAR (30) NOT NULL, 
        `email` VARCHAR (100) UNIQUE NOT NULL, 
        `password` VARCHAR (200) NOT NULL, 
        `role` ENUM ('admin', 'users') NOT NULL,
        `created_at` TIMESTAMP NOT NULL, 
        `updated_at` TIMESTAMP NOT NULL
    );"
);