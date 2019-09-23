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

Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/create', 'ProductController@create');



Route::get('/images', 'ImageController@index');

Route::resource('bikes', 'BikeController');

