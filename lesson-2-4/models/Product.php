<?php

namespace app\models;

class Product extends DBModel
{
    public $id;
    public $categories;
    public $name;
    public $description;
    public $price;


    public function __construct($categories = null, $name = null, $description = null, $price = null)
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

