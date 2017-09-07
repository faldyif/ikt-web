<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'filename', 'content'];
}
