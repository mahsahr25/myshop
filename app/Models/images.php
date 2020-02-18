<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class images extends Model
{
    //
    public $timestamps = false;

    public function Kala(){
        return $this->belongsTo('App\Models\kala','id','kala_id');
    }
    public function getImagenameAttribute($value){
        return "/app-assets/img/post/".$value;
    }

    use Notifiable;
    protected $fillable=['imagename','kala_id'];
}
