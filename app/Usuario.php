<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $fillable = ['name','username','password','email','avatar'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
