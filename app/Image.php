<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Parala relacion con la imagen del usuario
    protected $fillable=['url'];

    public function imageable(){//no tiene nada que ver con el de migration
        return $this->morphTo();
    }
}
