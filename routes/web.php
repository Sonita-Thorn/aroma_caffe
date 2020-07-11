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
    return view('home');
});
Route::resource('products', 'ProductController'); 
Route::get('products/{product}', 'ProductController@show')->name('products.show');

// Route::get('/menu', function () {
//     return view('menu');
// });
Route::get('/menu','ProductController@show');

