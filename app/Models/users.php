<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class users extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password','gender',
    ];


    public $timestamps = false;
    protected $with = ['photos'];


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

    public function Photos(){
        return $this->morphMany('App\Models\photos','imageable');
    }


}
