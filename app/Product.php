<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->MorphMany('App\Image','imageable');
    }
}
