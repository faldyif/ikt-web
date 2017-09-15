<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BerthingPlan extends Model
{
    protected $fillable = ['type', 'eta', 'vessel', 'agent', 'voy'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
