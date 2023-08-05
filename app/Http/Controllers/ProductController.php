<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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
    function cartList() {
        $userId = Session::get('user')['id'];
        $cartitems = DB::table('cart')
                        ->join('products', 'cart.product_id', '=', 'products.id') // Corrected join statement
                        ->where('cart.user_id', $userId)
                        ->select('products.*' , 'cart.id as cart_id')
                        ->get();
        return view('cartList', ['cartitems' => $cartitems]);
    }
    function RemoveFromCart($id){
        Cart::destroy($id);
        return Redirect('cartList');
    }
    function OrderNow(){
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
                            ->join('products', 'cart.product_id', '=', 'products.id') // Corrected join statement
                            ->where('cart.user_id', $userId)
                            ->sum('products.price');
        return view('/orderNow' , ['total' => $total]);
    }
    function OrderPLace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id' , $userId)->get();
        foreach( $allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payement_method = $req->payment;
            $order->payement_status = 'pending';
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id' , $userId)->delete();
        }
        return  redirect('/');
       
    }
    function ShowOrders(){
        $userId = Session::get('user')['id'];
        $orders = $products = DB::table('orders')
                            ->join('products', 'orders.product_id', '=', 'products.id') // Corrected join statement
                            ->where('orders.user_id', $userId)
                            ->get();
        return view('orders' , ['orders' => $orders]);
    }
}
