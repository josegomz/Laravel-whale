<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zonaturistica extends Model
{
	protected $fillable = ['name','image','location','description'];
    
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
