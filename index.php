<?php 

require_once __DIR__ . "/vendor/autoload.php";

$app = new App();

$app->get('/categories', 'CategoryController@index');
$app->get('/categories/create', 'CategoryController@create');
$app->get('/categories/edit', 'CategoryController@edit');
$app->post('/categories/store', 'CategoryController@store');
$app->post('/categories/update', 'CategoryController@update');
$app->get('/categories/destroy', 'CategoryController@destroy');

$app->get('/products', 'ProductController@index');
$app->get('/products/create', 'ProductController@create');
$app->post('/products/store', 'ProductController@store');

$app->run();