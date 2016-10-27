<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;
use App\MultiException;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $news = Article::findAll();
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }


    public function actionLogin()
    {
        $errors = new MultiException();
        if (empty($_POST['login'])) {
            $errors->add(new \Exception('Пустой логин'));
        }
        if (empty($_POST['password'])) {
            $errors->add(new \Exception('Пустой пароль'));
        }
        throw $errors;
    }

}