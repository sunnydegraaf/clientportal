<?php

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

        $user = DB::table('users')->get();

        return view('welcome', compact('user'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');

/*Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::patch('/products/{product}/update', 'ProductController@update');
Route::delete('/products/{product}/delete', 'ProductController@delete');*/

Route::get('/images', 'ImageController@index');


