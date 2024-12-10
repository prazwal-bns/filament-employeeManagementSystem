<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    
}
