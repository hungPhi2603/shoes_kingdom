<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function getList() {
        $category= Category::all();
        return view('admin.category.list', ['category'=>$category]);
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
