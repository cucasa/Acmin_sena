<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    public function computer(){
        return $this->belongsTo('App\Models\computer');
    }



    public function courses(){
        return $this->belongsTo('App\Models\courses');
    }

}
