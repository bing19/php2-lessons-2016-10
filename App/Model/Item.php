<?php

namespace App\Model;

use App\Model;

class Item
    extends Model
    implements HasPrice
{

    public static $table = 'items';

    public $id;
    public $title;
    public $price;

    public function getPrice()
    {
        return $this->price;
    }
}