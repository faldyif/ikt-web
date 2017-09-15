<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'filename', 'content'];
}
