<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table= 'discount';

    function order() {
        return $this->hasMany('App\Order', 'discount_id', 'id');
    }
}
