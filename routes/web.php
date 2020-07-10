<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/add_new', function () {
    return view('add_new');
});

Route::get('/products', function () {
    $saved_data=App\Product::all();
    return view('product')->with('products',$saved_data);
});

Route::post('/saveproduct', 'ProductController@SaveProduct');

Route::get('deleteproduct/{id}','ProductController@DeleteProduct');

Route::get('editproduct/{id}','ProductController@EditProduct');

Route::post('saveeditproduct','ProductController@SaveEdit');
