<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\newcontroller;
use App\Models\Product;

use App\Models\categories;
use GuzzleHttp\Psr7\Request;

use App\Models\User;

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
    return redirect('products');
});


Route::resource('products', ProductsController::class);

Route::resource('users', UsersController::class);


Route::get('insert', function(){
    return view('insert');
});


//**************************** */ favourite to mohamed ************************************
Route::controller(newcontroller::class)->group(function () {
    Route::get('display', 'display');
    Route::post('fafa', 'fake');
    Route::get('sessiondata' , 'getsessiondata');
    Route::get('sessionstore/{id}' , 'sessionstore');
    
});


Route::resource('cat', categoryController::class);


Route::get('productsview', function () {

    $products = Product::all();
    $category = categories::all();
    $user = User::all();

    return view('productsview')->with(compact('products' , 'category'));
    
});


Route::get('test', function () {

    $products = Product::all();

    $category = categories::all();
    $user = User::all();

    return view('test')->with(compact('products' , 'category'));
    
});


Route::get('details', function (){

    
    return view('details');
    
});


// Route::get('test', function () {
    
//     return view('test');
// });




