<?php

namespace app\models;

class Orders extends Model
{
    public $id;
    public $date;
    public $login;
    public $basket;
    public $amount;

    public function getTableName() {
        return 'orders';
    }
}
