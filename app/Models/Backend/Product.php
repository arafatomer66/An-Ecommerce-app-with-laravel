<?php

namespace App\Models\Backend;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
