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
<<<<<<< HEAD
Route::get('products/{product}', 'ProductController@show')->name('products.show');

// Route::get('/menu', function () {
//     return view('menu');
// });
Route::get('/menu','ProductController@show');
=======
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/join', function() {
    return view('join_aroma');
});
Route::get('/us', function() {
    return view('about_us');
});


Auth::routes();
>>>>>>> 7b6ff09569c6da75d91f667e9105cb84bc76bcb6

Route::get('/home', 'HomeController@index')->name('home');
