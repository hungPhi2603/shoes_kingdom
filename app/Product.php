<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'products';

    public function category() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    function order_detail() {
        return $this->hasMany('App\Order_detail', 'product_id', 'id');
    }

    function comment() {
        return $this->hasMany('App\Comment', 'product_id', 'id');
    }

    function product_status() {
        return $this->hasMany('App\Product_status', 'product_id', 'id');
    }

    function product_image() {
        return $this->hasMany('App\Product_image', 'product_id', 'id');
    }
}
