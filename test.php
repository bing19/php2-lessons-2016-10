<?php

require_once __DIR__ . '/autoload.php';


function op()
{
    return function ($a, $b) {
        return $a+$b;
    };
}

echo op()(3, 4);