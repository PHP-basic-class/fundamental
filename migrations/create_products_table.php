<?php 

require_once __DIR__ . "/../helper/migration.php";

Migration::create_table(
    "create table products (
        id int unsigned primary key not null auto_increment, 
        name varchar (100) not null, 
        image varchar (255) not null,
        description text not null, 
        price int unsigned not null,  
        stock int unsigned not null, 
        category_id int unsigned not null,  
        created_at datetime not null,
        updated_at datetime not null, 
        deleted_at datetime
    );"
);