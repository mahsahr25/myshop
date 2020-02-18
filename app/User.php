<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

// ======= my actions ==================
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
        return $this->hasMany('App\Models\reviews','user_id');

    }
}
