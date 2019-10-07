<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function colors()
    {
        return $this->belongsTo(Color::class);

    }

    public function categories()
    {
        return $this->hasMany(Category::class);

    }

    public function images()
    {
        return $this->hasMany(Image::class);

    }
}
