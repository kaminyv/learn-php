<?php


namespace app\models;


class Basket extends DBModel
{
    public $id;
    public $session;
    public $user;
    public $product;

    public function __construct($session = null, $user = null, $product = null)
    {
        $this->session = $session;
        $this->user = $user;
        $this->product = $product;
    }

    protected static function getTableName()
    {
        return 'basket';
    }
}
