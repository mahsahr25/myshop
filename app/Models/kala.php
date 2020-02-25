<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class kala extends Model
{
    //
    public $table="kala";

    use Notifiable;
    protected $fillable = [
        'name', 'price', 'num',
    ];

    public function Category(){
        return $this->belongsTo('App\Models\category');
    }

    public function Images(){
        return $this->hasMany('App\Models\images','kala_id','id');
    }

    // public function Bascket(){
    //     return $this->hasMany('App\Models\bascket');
    // }
    public function users(){
        return $this->belongsToMany('App\Models\users');
    }

    public function Factor_kala(){
        return $this->hasMany('App\Models\factor_kala');
    }

    public function Takhfif(){
        return $this->belongsTo('App\Models\takhfif');
    }

    public function Reviews(){
        return $this->hasMany('App\Models\reviews');
    }

    public function Photos(){
        return $this->morphMany('App\Models\photos','imageable');
    }

    public function Tags(){
        return $this->morphtoMany('App\Models\tags','taggable');
    }
}
