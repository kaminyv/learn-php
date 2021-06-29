<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    abstract protected static function getTableName();

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";

        return DB::getInstance()->queryOne($sql, ['id' => $id]);
        //return DB::getInstance()->queryOneObject($sql, ['id' => $id], get_called_class());
    }
    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";

        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {

        $params = [];
        $columns = [];

        //INSERT INTO `products`(`name`, `description`, `price`) VALUES (:name, :description, :price)
        //$params = ['name' => 'Чай'...];

        foreach ($this as $key => $value) {
            if ($key == 'id') continue;
            $params[":{$key}"] = $value;
            $columns[] = $key;

        }
        $columns = implode(', ', $columns);
        $value = implode(', ', array_keys($params));
        $tableName = static::getTableName();

        $sql = "INSERT INTO `{$tableName}`({$columns}) VALUES ({$value})";

        DB::getInstance()->execute($sql, $params);
        $this->id = DB::getInstance()->lastInsertId();

        return $this;
    }

    public function update() {

    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

}
