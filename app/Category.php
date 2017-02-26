<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function projects(){
        return $this->belongsTo('App\Projects');
    }

    public function progresses(){
        return $this->hasOne('App\Progress');
    }
}
