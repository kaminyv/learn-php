<?php


namespace app\models;


class Customer extends DBModel
{
    public $id;
    public $user;
    public $name;
    public $address;
    public $phone;
    public $email;


    public function __construct($user = null, $name = null, $address = null, $phone = null, $email = null)
    {
        $this->user = $user;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }


    protected static function getTableName()
    {
        return 'customer';
    }
}
