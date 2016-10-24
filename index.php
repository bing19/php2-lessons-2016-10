<?php

require_once __DIR__ . '/autoload.php';

$news = \App\Model\Article::findAll();

$view = new \App\View();
$view->news = $news;

$view->foo = 12;

$html = $view->render(__DIR__ . '/templates/index.php');
$html = str_replace('без автора', 'автора нет', $html);
echo $html;