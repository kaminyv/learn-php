<?php


namespace app\models;


class Customer extends Model
{
    public $id;
    public $user;
    public $name;
    public $address;
    public $phone;
    public $email;


    public function __construct($user = 0, $name = '', $address = '', $phone = '', $email = '')
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
