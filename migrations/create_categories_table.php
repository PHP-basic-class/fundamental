<?php 

require_once __DIR__ . "/../helper/migration.php";

Migration::create_table(
    "create table categories (
        id int unsigned primary key not null auto_increment,
        name varchar(100) not null,
        created_at datetime not null,
        updated_at datetime not null
    );"
);