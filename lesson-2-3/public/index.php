<?php

use app\models\{Product, User, Categories, Customer, Orders};
use app\engine\Db;
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$categories = new Categories();
var_dump($categories->getAll());


$product = new Product(0,"Книга", "Фантастика", 23);
var_dump($product->insert());
var_dump($product);
var_dump($product->delete());

die();
$user = new User("User", 234);
$user->insert();



//var_dump($product->getOne(2));

//var_dump($product);



























die();
/*
//INSERT
$product = new Product('Чай', 25);

$product->insert();

//READ
$product = new Product();
$product->getOne(5);

$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/
