<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    //
    public function Roles(){
        return $this->belongsToMany('App\Models\roles');
    }
}
