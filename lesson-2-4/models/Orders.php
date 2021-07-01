<?php


namespace app\models;


class Orders extends DBModel
{
    public $id;
    public $user;
    public $customer;
    public $date;
    public $amount;


    public function __construct($user = null, $customer = null, $date = null, $amount = null)
    {
        $this->user = $user;
        $this->customer = $customer;
        $this->date = $date;
        $this->amount = $amount;
    }


    protected static function getTableName()
    {
        return 'orders';
    }
}
