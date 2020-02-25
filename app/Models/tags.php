<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class tags extends Model
{

    use Notifiable;
    protected $fillable = [
        'tags_id', 'taggable_id', 'taggable_type',
    ];
    public function Kala(){
        return $this->morphedByMany('App\Models\kala','taggable');
    }

    public function Reviews(){
        return $this->morphedByMany('App\Models\reviews','taggable');
    }
}
