<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BerthingPlan extends Model
{
    protected $fillable = ['type', 'eta', 'vessel', 'agent', 'voy'];
    protected $dates = ['deleted_at'];

    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
