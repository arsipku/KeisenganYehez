<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    protected $fillable = ['user_id', 'title', 'description'];
}
