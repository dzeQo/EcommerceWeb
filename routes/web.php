<?php

use App\Http\Controllers\AdminCtrl;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

//login view
Route::get('/login', function () {
    return view('login');
})->name('login');

//register view
Route::get('/register' , function (){
    return view('register');
})->name('register');

//logout  view 
Route::get('/logout', function () {
    Session()->forget('user'); 
    return Redirect('login');
})->name('logout');

//authentication routes
Route::post('/login' , [UserController::class , 'LogIn']);
Route::post('/signUp' , [UserController::class , 'SignIn']);

//products routes 
Route::get('/' , [ProductController::class , 'index'])->name('home');
Route::get("/detail/{id}" , [ProductController::class , 'show_details']);
Route::get("/search" , [ProductController::class , 'search']);
Route::post("/add_to_cart" , [ProductController::class , 'AddToCart']);
Route::get("/cartList" , [ProductController::class , 'cartList']);
Route::get("/RemoveFromCart/{id}" , [ProductController::class , 'RemoveFromCart']);
Route::get("/OrderNow" , [ProductController::class , 'OrderNow']);
Route::post("/orderplace" , [ProductController::class , 'OrderPLace']);
Route::get("/myorders" , [ProductController::class , 'ShowOrders']);

// Admins Routing
Route::get('/admin/login' , [AdminCtrl::class , 'login']);
Route::post('/admin/login' , [AdminCtrl::class , 'submit_login']);
Route::get('/admin/logout' , [AdminCtrl::class , 'logout']);
Route::get('/admin/dashboard' , [AdminCtrl::class , 'dashboard']);

//routing users 
Route::get('admin/users' ,[UserController::class , 'indexOfUsers']);
Route::get('admin/users/{id}/delete' , [UserController::class , 'destroy']);

//admins products CRUD
Route::get('admin/ManageP/{id}/delete' , [ProductController::class , 'trashProduct']);
Route::get('admin/ManageP' ,  [ProductController::class , 'indexOfProducts']);
Route::get('admin/ManageP/create' , [ProductController::class , 'create']);
Route::post('admin/ManageP/add' , [ProductController::class , 'AddProduct']);
Route::get('admin/ManageP/update/{id}' , [ProductController::class , 'update']);
Route::post('admin/ManageP/{id}/edit' , [ProductController::class , 'updateProduct']);

//bring cart data to dashboard
Route::get('admin/ManageCart' , [ProductController::class , 'indexOfCarts']);

//bring orders data to dashboard
Route::get('admin/ManageOrders' , [ProductController::class , 'indexOfOrders']);
Route::get('admin/ManageOrders/trash/{id}' , [ProductController::class , 'trashOrder']); 
Route::get('admin/ManageOrders/update/{id}' , [ProductController::class , 'editview']);
Route::post('admin/ManageOrders/{id}/edit' , [ProductController::class , 'updateOrder']);


//product by categories 

Route::get("/categories/clothes" , [CategoryController::class , 'clothes']);
Route::get("/categories/phones" , [CategoryController::class , 'phones']);
Route::get("/categories/sport" , [CategoryController::class , 'sport']);
Route::get("/categories/Phones's accessories" , [CategoryController::class , 'AccOfPhones']);
Route::get("/categories/electromenager" , [CategoryController::class , 'homePrd']);
Route::get("/categories/fornitures" , [CategoryController::class , 'fornitures']);
Route::get("/categories/beauty" , [CategoryController::class , 'beauty']);
Route::get("/categories/health" , [CategoryController::class , 'health']);
Route::get("/categories/kitchen" , [CategoryController::class , 'kitchen']);
Route::get("/categories/gaming" , [CategoryController::class , 'gaming']);


//pages view 
Route::get('/privacy&policy' , function (){
    return view('privacy');
})->name('pp');

Route::get('/about-us' , function(){
    return view('about');
})->name('aboutus');

Route::get('/contact-us' , function(){
    return view('contact');
})->name('aboutus');


//comments route
Route::post('/save-comment/{id}',[ProductController::class,'save_comment']);
Route::get('/admin/comments' , [CommentController::class , 'index']);
Route::get('admin/comments/update/{id}' , [CommentController::class , 'updateCmnt']);
Route::post('admin/comments/{id}/edit' , [CommentController::class , 'editCmnt']);
Route::get('admin/comments/trash/{id}' , [CommentController::class , 'TrachComment']); 


//mailing route
Route::match('post', '/send_message', [ContactController::class, 'sendMail']);

