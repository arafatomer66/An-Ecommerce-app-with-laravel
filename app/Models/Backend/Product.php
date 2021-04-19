<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function brand(){
    	return $this->belongsTo(Brand::class);
    }

    // ORM for Product and It's Images
    public function images(){
    	return $this->hasMany(ProductImage::class);
    }
}
