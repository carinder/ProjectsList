<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class priorities extends Model
{
    protected $guarded = [];
    
    public function projects(){
        return $this->belongsToMany(Projects::class);
    }
}
