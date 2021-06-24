<?php

use app\models\{Product, User, Basket, Orders};
use app\engine\Db;
use app\engine\Autoload;


include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());



$product->getOne(15);


$user = new User(new Db());

$user->getOne(2);

var_dump($product);
var_dump($user);


die();

