<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name','image','services','location','price'];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
