<?php

namespace app\models;

class Product extends Model
{
    public $id;
    public $categories;
    public $name;
    public $description;
    public $price;


    public function __construct($categories = 0, $name = '', $description = '', $price = '')
    {
        $this->categories = $categories;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    protected static function getTableName()
    {
        return 'products';
    }

}

