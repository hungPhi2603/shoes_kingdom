<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product_image;
use App\Product_status;
use Illuminate\Http\Request;
use App\Product;

class AjaxController extends Controller
{
    function getQuantity($id) {
        $status= Product_status::find($id);
        echo $status->quantity_available;
    }
}
