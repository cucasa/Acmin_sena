<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseteacher extends Model
{
    public function teachers(){
        return $this->belongsTo('App\Models\teachers');
    }


    public function courses(){
        return $this->belongsTo('App\Models\courses');
    }

}
