<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::orderByDesc('created_at')->skip(0)->take(3)->get();
        return  view('product' , ['products'=> $data]);
    }
}
