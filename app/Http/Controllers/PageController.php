<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function __construct()
    {
        $category= Category::all();
        $productSaleOff= Product::whereColumn('unit_price', '>', 'promotion_price')->take(9)->get();
        $lastestProducts= Product::all()->sortByDesc('id')->take(8);
        view()->share('category', $category);
        view()->share('productSaleOff', $productSaleOff);
        view()->share('lastestProducts', $lastestProducts);

        if (Auth::check()) {
            view()->share('user', Auth::user());
        }
    }

    function home() {
        return view('pages.home');
    }

    function productDetail($id) {
        $product= Product::find($id);
        return view('pages.productDetail', compact('product')/*['product'=>$product]*/);
    }

    function getAddToCart(Request $request, $id) {
        $this->validate($request, [
            'status'=>'required'
        ]);
        $product= Product::find($id);
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $size_id= $request->status;
        $cart= new Cart($oldCart);
        $cart->add($product, $product->id, $size_id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
        return redirect('product/'.$product->id);
    }

    function getCart() {
        if (!Session::has('cart')) {
            return view('pages.shoppingCart');
        }
        $oldCart= Session::get('cart');
        $cart= new Cart($oldCart);
        return view('pages.shoppingCart', ['products'=> $cart->items, 'totalPrice'=> $cart->totalPrice] );
    }

    function getAllCart() {
        dd(Session::get('cart'));
    }

    function getLogin() {
        return view('pages.login');
    }

    function postLogin(Request $request) {
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect('/home');
        }
        else return redirect('/login')->with('alert', 'Email hoặc mật khẩu không chính xác');
    }

    function getLogout() {
        Auth::logout();
        return redirect('home');
    }

    function getRegistration() {
        return view('pages.registration');
    }
}
