<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $table = 'categories';

    public function product() {
        return $this->hasMany(Product::class);
    }
}
