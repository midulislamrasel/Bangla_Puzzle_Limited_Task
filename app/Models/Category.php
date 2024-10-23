<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    //---------------------Products---------------
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    //-------------------------
    protected $guarded = [];
}
