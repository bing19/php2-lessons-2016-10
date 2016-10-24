<?php

require_once __DIR__ . '/autoload.php';

function sum($a, $b)
{
    echo $a+$b;
    return $a+$b;
}

if ( sum(2, 3) == 7 && sum(3, 2) == 5) {
    echo 'Тест пройден';
}