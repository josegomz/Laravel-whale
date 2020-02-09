<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /*relacion muchos a muchos con roles*/
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    /*validacion de roles*/
    public function authorizeRoles($roles){
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no es autorizada'); 
    }

    /*verifica si tiene un arreglo de roles*/
    public function hasAnyRole($roles){
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($roles)) {
                    return true;
                }
            }
        }else{
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false; 
    }


    /*validar si un usuario contiene el rol*/
    public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()) {
            # code...
            return true;
        }
        return false;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
