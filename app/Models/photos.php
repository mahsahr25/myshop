<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class photos extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'name', 'imageable_id', 'imageable_type',
    ];

    public function Imageable(){
        return $this->morphTo();
    }

    public function getNameAttribute($value){
        return "/app-assets/img/post/".$value;
    }
}
