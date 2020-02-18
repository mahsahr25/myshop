<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class factor_kala extends Model
{
    //
    public $table="factor_kala";

    public function Kala(){
        return $this->belongsTo('App\Models\kala');
    }

    public function Factor(){
        return $this->belongsTo('App\Models\factor');
    }
}
