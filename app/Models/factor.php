<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class factor extends Model
{
    //
    public $table="factor";

    public function Users(){
        return $this->belongsTo('App\Models\users');
    }

    public function Factor_kala(){
        return $this->hasMany('App\Models\factor_kala');
    }

    public function Transaction(){
        return $this->hasMany('App\Models\transaction');
    }

    public function Shipping(){
        return $this->hasOne('App\Models\shipping');
    }
    public function Address(){
        return $this->belongsTo('App\Models\address');
    }
}
