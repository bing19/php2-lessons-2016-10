<?php

namespace App\Model;

trait HasFullText
{

    public $lead;
    public $text;

    public function getFullText()
    {
        return $this->lead . $this->text;
    }

}