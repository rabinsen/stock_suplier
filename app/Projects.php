<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name', 'description', 'assign_to',
    ];
}
