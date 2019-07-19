<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;
use App\Product_status;
use Illuminate\Validation\Rule;

class Product_statusController extends Controller
{
    function getList($productID) {      /*get status for 1 product*/
        $product_status= Product_status::all()->where('product_id', $productID);
        $product= Product::find($productID);
        return view('admin.product_status.list', ['product_status'=>$product_status, 'product'=>$product]);
    }

    function getCreate($productID) {
        $product= Product::find($productID);
        return view('admin.product_status.create', ['product'=>$product]);
    }

    function postCreate(Request $request, $productID) {

        $this->validate($request, [
            'quantity'  => 'required|numeric',
            'product_id'=>'required',
            'size'      => [
                'required',
                Rule::unique('product_status')->where(function ($query) use ($request) {
                    return $query->whereSize($request->size)->whereProduct_id($request->product_id);
                }),
            ]
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
            'quantity'  => 'required|numeric',
            'product_id'=>'required',
            'size'      => [

                Rule::unique('product_status')->where(function ($query) use ($request, $product_status) {
                    return $query
                            ->whereSize($request->size)
                            ->whereProduct_id($request->product_id)
                            /*->WhereNotIn('id', [$product_status->id])*/  ;
                }),
            ]
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

    function getAllStatus() {
        $product= DB::table('products')
                        ->join('product_status', 'products.id', '=', 'product_status.product_id')
                        ->select('products.title', 'product_status.size', 'product_status.quantity_available', 'products.unit_price', 'products.promotion_price')
                        ->get();
        return view('admin.product_status.getAll', ['product'=>$product]);
    }
}
