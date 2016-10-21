<?php

namespace App;

/**
 *
 * @property $foo
 * @property $bar
 *
 */
class TestDoc
{

    protected $data = [];

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __get($key)
    {
        return $this->data[$key];
    }

}