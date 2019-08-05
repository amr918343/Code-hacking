<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed role
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'role_id', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsTo('App\Role', 'role_id');
    }


    public function photo() {
        return $this->belongsTo('App\Photo', 'photo_id');
    }

    public function isAdmin() {
        if($this->role->name == 'admin')
            return true;
        return false;
    }
// Relations
    public function posts() {
        return $this->hasMany('App\Post');
    }
}