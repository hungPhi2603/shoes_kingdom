<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Discount;

class DiscountController extends Controller
{
    function getList() {
        $discount= Discount::all();
        return view('admin.discount.list', ['discount'=>$discount]);
    }

    function getCreate() {
        return view('admin.discount.create');
    }

    function postCreate(Request $request) {
        $this->validate($request, [
            'code'=>'required',
            'value'=>'required|numeric',
            'dateStart'=>'required|date',
            'dateExpired'=>'required|date|after_or_equal:dateStart'
        ]);

        $discount= new Discount;
        $discount->code= $request->code;
        $discount->type= $request->type;
        $discount->value= $request->value;
        $discount->date_start= $request->dateStart;
        $discount->date_expire= $request->dateExpired;

        $discount->save();
        return redirect('admin/discount/create')->with('alert', 'Creation successfully!');
    }

    function edit($id) {
        $discount= Discount::find($id);
        return view('admin.discount.edit', ['discount'=>$discount]);
    }

    function update(Request $request, $id) {
        $discount= Discount::find($id);
        $this->validate($request, [
            'code'=>'required',
            'value'=>'required|numeric',
            'dateStart'=>'required|date',
            'dateExpired'=>'required|date|after_or_equal:dateStart'
        ]);

        $discount->code= $request->code;
        $discount->type= $request->type;
        $discount->value= $request->value;
        $discount->date_start= $request->dateStart;
        $discount->date_expire= $request->dateExpired;

        $discount->save();

        return redirect('admin/discount')->with('alert', 'Creation successfully!');
    }

    function delete($id) {
        $discount= Discount::find($id);
        $discount->delete();
        return redirect('admin/discount');
    }
}
