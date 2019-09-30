<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function colors()
    {
        return $this->hasMany(Color::class);

    }

    public function images()
    {
        return $this->hasMany(Image::class);

    }
}
