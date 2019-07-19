<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Product_image;

class Product_imageController extends Controller
{
    function getList($productID) {
        $product_image= Product_image::all()->where('product_id', $productID);
        $product= Product::find($productID);
        return view('admin.product_image.list', ['product_image'=>$product_image, 'product'=>$product]);
    }

    function getCreate($productID) {
        $product= Product::find($productID);
        return view('admin.product_image.create', ['product'=>$product]);
    }

    function postCreate(Request $request, $productID) {
        $this->validate($request, [
            'image'=>'required|image'
        ]);

        $product_image= new Product_image;
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            if ($file->isValid()) {
                $path= $file->store('public/upload/product');
                $product_image->filename= substr($path, 22);
            }
        }

        $product_image->product_id= $productID;

        $product_image->save();
        return redirect("admin/product/".$productID."/product_image/create")->with('alert', 'Creation successfully!');
    }

    function edit($productID, $id) {                        /*Route truyen 2 tham so nen neu chi co 1 para thi se uu tien nhan $productID*/
        $product_image= Product_image::find($id);
        return view('admin.product_image.edit', ['product_image'=>$product_image]);
    }

    function update(Request $request, $productID, $id) {
        $product_image= Product_image::find($id);
        $this->validate($request, [
            'image'=>'required|image'
        ]);

        if ($request->hasFile('image')) {
            $file= $request->file('image');
            if ($file->isValid()) {
                $path= $file->store('public/upload/product');
                $product_image->filename= substr($path, 22);
            }
        }
        $product_image->save();

        return redirect("admin/product/".$productID."/product_image/");
    }

    function delete($productID, $id) {
        $product_image= Product_image::find($id);
        $product_image->delete();
        return redirect("admin/product/".$productID."/product_image/");
    }
}
