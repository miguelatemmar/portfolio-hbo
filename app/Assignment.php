<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
//    protected $fillable = ['naam', 'beschrijving', 'status_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(){
        return $this->belongsTo('App\Status');
    }
}