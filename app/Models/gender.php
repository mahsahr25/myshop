<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    //
    public $table="gender";

    public function Users(){
        return $this->hasMany('App\Models\users','id','gender');
    }
}
