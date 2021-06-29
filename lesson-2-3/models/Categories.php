<?php


namespace app\models;


class Categories extends Model
{
    public $id;
    public $subid;
    public $name;
    public $description;


    public function __construct($subid = 0, $name = '', $description = '')
    {
        $this->subid = $subid;
        $this->name = $name;
        $this->description = $description;
    }


    protected static function getTableName()
    {
        return 'categories';
    }
}
