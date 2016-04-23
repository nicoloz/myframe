<?php
namespace App;
abstract class Model
{
    const TABLE = '';
    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findByID($id)
    {
        $db = new Db();
        //$query = ['id' => $id];
        $result = $db->query(
            'SELECT * FROM ' . static::TABLE . " WHERE id = $id",
            static::class
        );
        return $result[0] ?: false;
    }

    abstract public function getName();
}