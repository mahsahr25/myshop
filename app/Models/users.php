<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    public $timestamps = false;

    public function Gender(){
        return $this->belongsTo('App\Models\gender','gender','id');
    }

    public function Factor(){
        return $this->hasMany('App\Models\factor');
    }

    public function Bascket(){
        return $this->hasMany('App\Models\bascket');
    }

    public function Address(){
        return $this->hasMany('App\Models\address');
    }

    public function Roles(){
        return $this->belongsToMany('App\Models\roles','roles_users','userid','roleid');
    }
    public function Reviews(){
        return $this->hasMany('App\Models\reviews','id','user_id');

    }
}
