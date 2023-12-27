create table products (
    id int unsigned primary key not null auto_increment, 
    name varchar (100) not null, 
    description text not null, 
    price int unsigned not null,  
    stock int unsigned not null, 
    category_id int unsigned not null,  
    created_at datetime not null,
    updated_at datetime not null, 
    deleted_at datetime
);

create table categories (
    id int unsigned primary key not null auto_increment,
    name varchar(100) not null,
    created_at datetime not null,
    updated_at datetime not null, 
    deleted_at datetime
);


insert into categories (name, created_at, updated_at) 
values ("Mobile Phone", now(), now()), ("Desktop", now(), now()), ("Tablet", now(), now());