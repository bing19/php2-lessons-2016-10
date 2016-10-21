<?php

require_once __DIR__ . '/autoload.php';

/**
 * @deprecated
 * @param $a
 * @param $b
 * @return mixed
 */
function sum($a, $b)
{
    return $a+$b;
}

echo sum(2, 3);