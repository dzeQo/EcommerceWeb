<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    //
    function index(){
        $recents = Product::latest()->take(3)->get();
        $data = Product::take(4)->get();
        return  view('product' , ['products'=> $data , 'recents'=>$recents]);
    }

    function show_details($id){
        $data =  Product::find($id);
        return view('details' , ['product' =>$data]);
    }
    
    function search( Request $req){
        $data = Product::where('name' ,'like' , '%' . $req->input('query') .'%')->get();
        return view('search' , ['products' => $data]);
    }
    function AddToCart(Request $req){
        if ($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
    static function showCart(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id' , $userId)->count();
    }
}
