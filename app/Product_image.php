<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $table= 'product_images';

    function product() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
