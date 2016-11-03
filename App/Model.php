<?php

namespace App;

abstract class Model
{

    public static $table;

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $data = $db->query($sql, [':id' => $id], static::class);
        return $data[0] ?? false;
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if ($this->isNew()) {

            $columns = [];
            $binds = [];
            $data = [];
            foreach ($this as $column => $value) {
                if ('id' == $column) {
                    continue;
                }
                $columns[] = $column;
                $binds[] = ':' . $column;
                $data[':' . $column] = $value;
            }

            $sql = '
                INSERT INTO ' . static::$table . '
                (' . implode(', ', $columns). ')
                VALUES
                (' . implode(', ', $binds). ')
                ';
            $db = new Db();
            $db->execute($sql, $data);
            $this->id = $db->lastInsertId();
        }
    }

    public function fill(array $data)
    {
        $errors = new MultiException();

        foreach ($data as $key => $value) {
            try {

                if ('id' == $key) {
                    throw new \Exception('Нельзя присваивать ID!');
                }

                $this->$key = $value;

            } catch (\Exception $e) {
                $errors->add($e);
            }
        }

        if (count($errors) > 0) {
            throw $errors;
        }
    }

}