<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function apprendices(){
        return $this->hasMany('App\Models\apprendices');
    }


    public function areas(){
        return $this->belongsTo('App\Models\areas');
    }



    public function training_centers(){
        return $this->belongsTo('App\Models\training_centers');
    }


    public function course_teacher(){
        return $this->hasMany('App\Models\course_teacher');
    }
}
