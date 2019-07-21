<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class UserController extends Controller
{
    function getList() {
        $user= User::all();
        return view('admin.user.list', ['user'=>$user]);
    }

    function getCreate() {
        return view('admin.user.create');
    }

    function postCreate(Request $request) {
        $this->validate($request, [
            'name'=> 'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:32',
            'passwordAgain'=>'required|same:password',
            'address'=>'required|min:3',
            'phone'=>'required|digits_between:9, 15',
            'avatar'=>'image'
        ]);

        $user= new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->address= $request->address;
        $user->phone= $request->phone;
        $user->role= $request->role;

        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            if ($file->isValid()) {
                $path= $file->store('public/upload/user');
                $user->avatar= substr($path, 19); //19 is start position of file name
            }
        }
        $user->save();
        return redirect('admin/user')->with('alert', 'Creation successfully!');
    }

    function edit($id) {
        $user= User::find($id);
        return view('admin.user.edit', ['user'=>$user]);
    }

    function update(Request $request, $id) {
        $user= User::find($id);
        $this->validate($request, [
            'name'=> 'required|min:3',
            'address'=>'required|min:3',
            'phone'=>'required|digits_between:9, 15',
            'avatar'=>'image'
        ]);

        $user->name= $request->name;
        if ($request->changePassword == "on") {
            $this->validate($request, [
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password'
            ]);
            $user->password= bcrypt($request->password);
        }
        $user->address= $request->address;
        $user->phone= $request->phone;
        $user->role= $request->role;

        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            if ($file->isValid()) {
                $path= $file->store('public/upload/user');
                $user->avatar= substr($path, 19);
            }
        }
        $user->save();
        return redirect('admin/user')->with('alert', 'Creation successfully!');
    }

    function delete($id) {
        $user= User::find($id);
        $user->delete();
        return redirect('admin/user');
    }

    function getLoginAdmin() {
        return view('admin.login');
    }

    function postLoginAdmin(Request $request) {
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::attempt(['email'=> $request->email, 'password'=> $request->password], $remember)) {

        }
    }
}
