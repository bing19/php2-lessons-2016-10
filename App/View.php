<?php

namespace App;

class View
    implements \Countable, \Iterator
{

    use TMagic;

    protected $twig;

    public function __construct()
    {
        $this->twig = new \Twig_Environment(
            new \Twig_Loader_Filesystem([__DIR__ . '/../templates'])
        );
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        return $this->twig->render($template, $this->data);
    }

    public function count()
    {
        return count($this->data);
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return null !== key($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }
}