<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    //
    public function Kala(){
        return $this->belongsTo('App\Models\kala');
    }

    public function Users(){
        return $this->belongsTo('App\Models\users','user_id','id');
    }
}
