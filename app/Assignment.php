<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function status(){
        return $this->belongsTo('App\Status', 'foreign_key');
    }
}
