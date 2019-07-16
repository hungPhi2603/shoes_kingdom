<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Product_status;

class Product_statusController extends Controller
{
    function getList($productID) {
        $product_status= Product_status::all()->where('product_id', $productID);
        return view('admin.product_status.list', ['product_status'=>$product_status, 'productID'=>$productID]);
    }

    function getCreate($productID) {
        $product= Product::find($productID);
        return view('admin.product_status.create', ['product'=>$product]);
    }

    function postCreate(Request $request, $productID) {
        $this->validate($request, [
            'size'=>'required|numeric|unique:product_status,size',
            'quantity'=>'required|numeric'
        ]);

        $product_status= new Product_status;
        $product_status->size= $request->size;
        $product_status->quantity_available= $request->quantity;
        $product_status->product_id= $productID;

        $product_status->save();
        return redirect("admin/product/".$productID."/product_status/create")->with('alert', 'Creation successfully!');
    }

    function edit($productID, $id) {                        /*Route truyen 2 tham so nen neu chi co 1 para thi se uu tien nhan $productID*/
        $product_status= Product_status::find($id);
        return view('admin.product_status.edit', ['product_status'=>$product_status]);
    }

    function update(Request $request, $productID, $id) {
        $product_status= Product_status::find($id);
        $this->validate($request, [
            'quantity'=>'required|numeric'
        ]);


        $product_status->quantity_available= $request->quantity;
        $product_status->product_id= $productID;
        $product_status->save();

        return redirect("admin/product/".$productID."/product_status/");
    }

    function delete($productID, $id) {
        $product_status= Product_status::find($id);
        $product_status->delete();
        return redirect("admin/product/".$productID."/product_status/");
    }
}
