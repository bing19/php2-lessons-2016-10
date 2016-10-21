<?php

namespace App;

class View
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

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }

}