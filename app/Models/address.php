<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    //
    public function Factor(){
        return $this->hasMany('App\Models\factor');
    }

    public function Users(){
        return $this->belongsTo('App\Models\users');
    }
}
