<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    public function appentices(){

        return $this->hasOne('App\Models\appentices');

    }



}
