<?php


namespace app\models;


class Categories extends DBModel
{
    public $id;
    public $subid;
    public $name;
    public $description;


    public function __construct($subid = null, $name = null, $description = null)
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
