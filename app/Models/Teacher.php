<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{

    public function areas(){
        return $this->belongsTo('App\Models\areas');
    }

    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }


    public function course_teacher(){
        return $this->hasMany('App\Models\course_teacher');
    }


}
