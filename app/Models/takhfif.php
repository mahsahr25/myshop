<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class takhfif extends Model
{
    //

    public function Kala(){
        return $this->hasMany('App\Models\kala');
    }
}
