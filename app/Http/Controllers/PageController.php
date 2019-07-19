<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Product_image;

class PageController extends Controller
{
    public function __construct()
    {
        $category= Category::all();

        view()->share('category', $category);
    }

    function home() {
        $lastestProducts= Product::all()->sortByDesc('id')->get(1);/*orderBy('created_at', 'DESC')->take(1)->get();*/
        $image= $lastestProducts->product_image;
        return view('pages.home', ['lastestProducts'=>$lastestProducts, 'image'=>$image]);
    }

    function getCreate() {
        return view('admin.category.create');
    }

    function postCreate(Request $request) {
        $this->validate($request, [
            'name'=>'required'
        ]);

        $category= new Category;
        $category->name= $request->name;

        $category->save();
        return redirect('admin/category/create')->with('alert', 'Creation successfully!');
    }

    function edit($id) {
        $category= Category::find($id);
        return view('admin.category.edit', ['category'=>$category]);
    }

    function update(Request $request, $id) {
        $category= Category::find($id);
        $this->validate($request, [
            'name'=>'required'
        ]);


        $category->name= $request->name;
        $category->save();

        return redirect('admin/category')->with('alert', 'Creation successfully!');
    }

    function delete($id) {
        $category= Category::find($id);
        $category->delete();
        return redirect('admin/category');
    }
}
