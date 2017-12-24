<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class News extends Model
{
    use SoftDeletes;
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'filename', 'content'];
    protected $dates = ['deleted_at'];
}
