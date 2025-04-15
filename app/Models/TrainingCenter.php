<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class training_centers extends Model
{
    public function teachers(){
        return $this->hasMany('App\Models\teachers');
    }


    public function courses(){
        return $this->hasMany('App\Models\courses');
    }

}
