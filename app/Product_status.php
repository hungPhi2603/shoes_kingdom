<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_status extends Model
{
    protected $table= 'product_status';

    function product() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
