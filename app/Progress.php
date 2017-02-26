<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'percentage'
    ];

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
