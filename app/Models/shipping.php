<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    //
    public function Factor(){
        return $this->belongsTo('App\Models\factor');
    }
}
