<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * @return mixed
     * makes the relation to assignment
     */
//    public function assignment(){
//        return $this->hasOne('App\Assignment', 'foreign_key');
//    }
    public function assignment(){
        return $this->hasOne('App\Assignment');
    }
}
