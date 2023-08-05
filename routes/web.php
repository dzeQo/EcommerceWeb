<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register' , function (){
    return view('register');
})->name('register');

Route::get('/logout', function () {
    Session()->forget('user'); 
    return Redirect('login');
})->name('logout');


Route::post('/login' , [UserController::class , 'LogIn']);
Route::post('/signin' , [UserController::class , 'SignIn']);
Route::get('/' , [ProductController::class , 'index']);
Route::get("/detail/{id}" , [ProductController::class , 'show_details']);
Route::get("/search" , [ProductController::class , 'search']);
Route::post("/add_to_cart" , [ProductController::class , 'AddToCart']);
Route::get("/cartList" , [ProductController::class , 'cartList']);
Route::get("/RemoveFromCart/{id}" , [ProductController::class , 'RemoveFromCart']);
Route::get("/OrderNow" , [ProductController::class , 'OrderNow']);
Route::post("/orderplace" , [ProductController::class , 'OrderPLace']);
Route::get("/myorders" , [ProductController::class , 'ShowOrders']);

