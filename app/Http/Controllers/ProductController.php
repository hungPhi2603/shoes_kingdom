<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function getList() {
        $product= Product::all();
        return view('admin.product.list', ['product'=>$product]);
    }

    function getCreate() {
        $category= Category::all();
        return view('admin.product.create', ['category'=>$category]);
    }

    function postCreate(Request $request) {
        $this->validate($request, [
            'title'=>'required',
            'unitPrice'=>'required|numeric',
            'promotionPrice'=>'required|numeric|lte:unitPrice'
        ]);

        $product= new Product;
        $product->title= $request->title;
        $product->unit_price= $request->unitPrice;
        $product->promotion_price= $request->promotionPrice;
        $product->description= $request->description;
        $product->category_id= $request->category;

        $product->save();
        return redirect('admin/product/create')->with('alert', 'Creation successfully!');
    }

    function edit($id) {
        $product= Product::find($id);
        $category= Category::all();
        return view('admin.product.edit', ['product'=>$product, 'category'=>$category]);
    }

    function update(Request $request, $id) {
        $product= Product::find($id);
        $this->validate($request, [
            'title'=>'required',
            'unitPrice'=>'required|numeric',
            'promotionPrice'=>'required|numeric|lte:unitPrice'
        ]);

        $product->title= $request->title;
        $product->unit_price= $request->unitPrice;
        $product->promotion_price= $request->promotionPrice;
        $product->description= $request->description;
        $product->category_id= $request->category;

        $product->save();

        return redirect('admin/product')->with('alert', 'Creation successfully!');
    }

    function delete($id) {
        $product= Product::find($id);

//        $product->product_image()->delete();            /*another way is adding onDelete('cascade') on foreign key line in Schema*/
//        $product->product_status()->delete();            /*another way is adding onDelete('cascade') on foreign key line in Schema*/

        $product->delete();
        return redirect('admin/product');
    }
}
