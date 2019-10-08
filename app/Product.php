<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function image()
    {
        return $this->belongsTo(Image::class);

    }
}
