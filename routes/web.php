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

Route::get('/test', 'HomeController@test')->middleware('admin');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::resource('user', 'UserController');

Route::resource('users', 'UsersController');

Route::resource('products', 'ProductController');

Route::resource('categories', 'CategoryController');

Route::get('/images', 'ImageController@index');

