<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name', 'quantity'
    ];

    public function projects(){
        return $this->belongsTo('App\Projects');
    }

}
