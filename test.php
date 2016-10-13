<?php

require_once __DIR__ . '/autoload.php';

$article = new \App\Model\Article();

$article->title = 'Пример новости';
$article->lead = 'Текст введения';

$article->insert();

var_dump($article);