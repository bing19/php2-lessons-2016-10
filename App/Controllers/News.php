<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;

class News
    extends Controller
{

    public function actionOne()
    {
        $article = Article::findById($_GET['id']);
        if (empty($article)) {
            throw new \Exception('Новость не найдена');
        }
        $this->view->article = $article;
        $this->view->display('news/one.html');
    }

}