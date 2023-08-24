<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use App\Models\comments;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $recents = Product::latest()->take(3)->get();
        $data = Product::all();
        return  view('product' , ['products'=> $data , 'recents'=>$recents]);
    }

    function show_details($id){
        $data =  Product::find($id);
        return view('details' , ['product' =>$data]);
    }

    //adding comments function to products
    public function save_comment(Request $req , $pid ){
        $user = Session::get('user')['name'];
        $req->validate([
            'comment' => 'required'
        ]);
        $cm = new comments;
        $cm->product_id = $pid;
        $cm->username = $user;
        $cm->comment = $req->comment;
        $cm->status = 0;
        $cm->save();

        return redirect()->back();
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

    //backoffice data controlling

    //bring all the products
    public function indexOfProducts(){
        $products = Product::all();
        return view('admin.ManageP.index' , ['products' => $products]);
    }
    //adding products 
    public function create(){
        return view('admin.ManageP.add');
    }
    public function AddProduct(Request $req){
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description'=>'required',
            'gallery'=>'required'
        ]);
        $prd = new Product;
        $prd->name = $req->name;
        $prd->price = $req->price;
        $prd->category = $req->category;
        $prd->description = $req->description;
        $prd->gallery = $req->gallery;
        $prd->save();
        
        return redirect('admin/ManageP')->with('success','product has been added'); 
    }

    //delete products
    public function trashProduct($id){
        Product::where('id' , $id)->delete();
        return redirect('admin/ManageP');
    }

    //edit products
    public function update($id){
        $data=Product::find($id);
        return view('admin.ManageP.update' , ['data'=>$data]);
    }
    public function updateProduct( Request $req ,  $id){
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description'=>'required',
            'gallery'=>'required'
        ]);
        $prd = Product::find($id);
        $prd->name = $req->name;
        $prd->price = $req->price;
        $prd->category = $req->category;
        $prd->description = $req->description;
        $prd->gallery = $req->gallery;
        $prd->save();

        return redirect('admin/ManageP')->with('success', 'Product has been updated');
    }

    //bring all carts
    public function indexOfCarts(){
        $carts = Cart::all();
        return view('admin.ManageCart.index' , ['carts' => $carts]);
    }
    //bring  orders
    public function indexOfOrders(){
        $orders = Order::all();
        return view('admin.ManageOrders.index' , ['Orders' => $orders]);
    }
    //trash orders
    public function trashOrder($id){
        Order::where('id' , $id)->delete();
        return redirect('admin/ManageOrders');
    }
    //update the situation of order (dilevred  ,payed or not)
    public function editview($id){
        $orderToEdit = Order::where('id' , $id)->first();
        return view('admin.ManageOrders.update' , ['orderToEdit' =>$orderToEdit ]);
    }

    public function updateOrder( Request $req , $id){
        $order = Order::find($id)->first();
        $req->validate([
            'status' => 'required',
            'payement_status'=>'required'
        ]);
        $order = Order::find($id);
        $order->status = $req->status;
        $order->payement_status  = $req->pstatus;
        $order->save();

        return redirect('admin/ManageOrders')->with('done' , 'Order updated successfullly !');
    }

}
