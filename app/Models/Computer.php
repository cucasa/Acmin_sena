<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function appentices(){

        return $this->hasOne('App\Models\appentices');

    }



}
