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
    public function User(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function Tags(){
        return $this->morphtoMany('App\Models\tags','taggable');
    }
}
