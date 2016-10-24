<?php

namespace App\Model;

use App\Model;

class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($key)
    {
        if ('author' == $key) {
            return Author::findById($this->author_id);
        }
    }

    public function __isset($key)
    {
        if ('author' == $key && !empty($this->author_id)) {
            return true;
        }
    }

}