<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $guarded = [];
    
    public function priorities(){
        return $this->belongsToMany(Priorities::class);
    }
}
