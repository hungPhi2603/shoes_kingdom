<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';

    function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    function discount() {
        return $this->belongsTo('App\Discount', 'discount_id', 'id');
    }

    function order_detail() {
        return $this->hasMany('App\Order_detail', 'order_id', 'id');
    }
}
