<?php

require_once __DIR__ . '/autoload.php';

function action($sign)
{
    switch ($sign) {
        case '+':
            return function ($a, $b) {
                return $a+$b;
            };
            break;
        case '-':
            return function ($a, $b) {
                return $a-$b;
            };
            break;
    }
}

echo action('+')(2, 3);


$a = array_map(
    function ($x) {return $x*2;},
    [1,2,3]
);

var_dump($a);