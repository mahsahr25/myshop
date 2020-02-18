<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    public $table="users";

    public $timestamps = false;

    public function Gender(){
        return $this->belongsTo('App\Models\gender','gender','id');
    }

    public function Factor(){
        return $this->hasMany('App\Models\factor');
    }

    // public function Bascket(){
    //     return $this->hasMany('App\Models\bascket');
    // }

    public function kala(){
        return $this->belongsToMany('App\Models\kala');
    }

    public function Address(){
        return $this->hasMany('App\Models\address');
    }

    public function Roles(){
        return $this->belongsToMany('App\Models\roles');
    }
}
