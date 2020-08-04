<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $incrementing = false;

    protected $fillable = ['name'];

    // public function rols(){
    //     return $this->belongsToMany('App\Rol');
    // }

    public function image(){
        return $this->morphOne('App\Image','imageable');
    }
}
