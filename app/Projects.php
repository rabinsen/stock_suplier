<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Projects extends Model
{
    use Searchable;

    protected $fillable = [
        'name', 'description', 'assign_to',
    ];

    public function searchableAs()
    {
        return 'projects_index';
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }
    public function materials(){
        return $this->hasMany('App\Material');
    }
}
