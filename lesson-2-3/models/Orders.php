<?php


namespace app\models;


class Orders extends Model
{
    public $id;
    public $user;
    public $customer;
    public $date;
    public $amount;


    public function __construct($user = 0, $customer = 0, $date = '', $amount = 0)
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
