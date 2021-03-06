<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    protected $guarded = ['id'];

    public function log()
    {
      return $this->morphMany('App\Log', 'loggable');
    }
}
