<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function clothes(){
        $clothes = Product::where('category' ,'like' , '%'. 'clothes' .'%')->get();
        return view('category.clothes' , ['clothes'=> $clothes]) ;
    }

    public function phones(){
        $phones = Product::where('category' ,'like' , '%'. 'phones' .'%')->get();
        return view('category.phones' , ['phones'=> $phones]) ;
    }
    public function sport(){
        $sportproducts = Product::where('category' ,'like' , '%'. 'accessories of phone' .'%')->get();
        return view('category.sport' , ['sportproducts'=> $sportproducts]) ;
    }
    public function AccOfPhones(){
        $phthings = Product::where('category' ,'like' , '%'. 'accessories of phone' .'%')->get();
        return view('category.AccPhones' , ['AccPhones'=> $phthings]) ;
    }
    public function homePrd(){
        $homeProduct = Product::where('category' ,'like' , '%'. 'home\'s electronics' .'%')->get();
        return view('category.homeprd' , ['homeProduct'=> $homeProduct]) ;
    }

    public function fornitures(){
        $fornitures = Product::where('category' ,'like' , '%'. 'fornitures' .'%')->get();
        return view('category.fornitures' , ['fornitures'=> $fornitures]) ;
    }

    public function beauty(){
        $beauty = Product::where('category' ,'like' , '%'. 'beauty' .'%')->get();
        return view('category.beauty' , ['beauty'=> $beauty]) ;
    }

    public function health(){
        $health = Product::where('category' ,'like' , '%'. 'health' .'%')->get();
        return view('category.health' , ['health'=> $health]) ;   
    }

    public function kitchen(){
        $kitchen = Product::where('category' ,'like' , '%'. 'kitchen' .'%')->get();
        return view('category.kitchen' , ['kitchen'=> $kitchen]) ;   
    }

    public function gaming(){
        $gaming = Product::where('category' ,'like' , '%'. 'gaming' .'%')->get();
        return view('category.gaming' , ['gaming'=> $gaming]) ;   
    }

    



}
