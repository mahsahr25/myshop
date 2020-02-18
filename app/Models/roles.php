<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    public function Users(){
        return $this->belongsToMany('App\Models\users');
    }

    public function Permission(){
        return $this->belongsToMany('App\Models\permission');
    }
}
