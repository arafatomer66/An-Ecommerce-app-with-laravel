<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $fillable = [
    	'visitor_id',
    	'ip_address',
    	'product_id',
    	'product_quantity',
    	'order_id'
    ];

    public function visitor(){
    	return $this->belongsTo(Visitor::class);
    }

    public function product(){
    	return $this->belongsTo(App\Models\Backend\Product::class);
    }

    public function order(){
    	return $this->belongsTo(App\Models\Frontend\Order::class);
    }



    // Check for Auth Visitor or Grab the IP Address
    public static function totalCarts(){
    	if(Auth::check()){
    		$carts = Cart::where('visitor_id', Auth::id() )->where('order_id', NULL)->get();
    	}
    	else{
    		$carts = Cart::where('visitor_id', request()->ip() )->where('order_id', NULL)->get();
    	}

    	return $carts;
    }

 
    // Total Cart Items
    public static function totalItems(){
    	if(Auth::check()){
    		$carts = Cart::where('visitor_id', Auth::id() )->where('order_id', NULL)->get();
    	}
    	else{
    		$carts = Cart::where('visitor_id', request()->ip() )->where('order_id', NULL)->get();
    	}

    	$total_item = 0;

    	foreach( $carts as $cart ){
    		$total_item += $cart->product_quantity;
    	}

    	return $total_item;
    }


}
