<?php

require_once __DIR__ . '/autoload.php';

$ex = new \App\MultiException();

$ex[1] = 'foo';
$ex->add('bar');

foreach ($ex as $k => $v) {
    echo $k . '=' . $v;
}