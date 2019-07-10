<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table= 'order_detail';

    function order() {
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }

    function product() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    function product_status() {
        return $this->hasOneThrough('App\Product_status', 'App\Product', 'product_id', 'product_id', 'id', 'id');
    }
}
