<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auther extends Model
{
    public function book(){
     return $this->hasMany('\App\Book','autherid','id');
    //  return $this->belongsTo('\App\Book','id','autherid');
    }
}
