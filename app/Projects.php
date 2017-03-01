<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name', 'description', 'assign_to',
    ];

    public function categories(){
        return $this->hasMany('App\Category');
    }
    public function materials(){
        return $this->hasMany('App\Material');
    }
}
