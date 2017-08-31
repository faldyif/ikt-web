<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumPhoto extends Model
{
    protected $fillable = ['filename', 'user_id', 'album_id'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
