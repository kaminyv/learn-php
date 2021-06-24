<?php

namespace app\models;


class Basket extends Model
{
    public $id;
    public $session;
    public $product;
    public $quantity;
    public $price;

    public function getTableName() {
        return 'basket';
    }
}
