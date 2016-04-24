<?php
namespace App;
abstract class Model
{
    const TABLE = '';
    public static function findAll()
    {
        $db = Db::getInstance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findByID($id)
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM " . static::TABLE . " WHERE id = $id";
        $result = $db->query(
            $query,
            static::class
        );
        return $result[0] ?: false;
    }

    protected static function findLastRowsByField($field, $limit)
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT * FROM ' . static::TABLE . ' ORDER BY ' . $field . ' DESC LIMIT ' . $limit,
            static::class
        );
        return $result ?: false;
    }
}

?>