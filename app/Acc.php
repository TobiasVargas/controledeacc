<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acc extends Model
{
    protected $table = 'accs';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
