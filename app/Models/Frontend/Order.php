<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = [
    	'visitor_id',
    	'ip_address',
    	'name',
    	'phone_no',
    	'shipping_address',
    	'email',
    	'message_note',
    	'is_paid',
    	'is_complete',
    	'seen_by_admin',
    ];

    public function visitor(){
    	return $this->belongsTo(Visitor::class);
    }
    public function carts(){
    	return $this->belongsTo(App\Models\Frontend\Cart::class);
    }

}
