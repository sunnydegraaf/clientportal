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

        //$user = DB::table('users')->get();

        return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.admin')->middleware('auth:admin');
});

Route::prefix('categories')->group(function() {
    Route::get('/boats', 'ProductController@boats')->name('categories.boats');
    Route::get('/boats2', 'CategoryController@boats')->name('categories.boats2');
});

Route::group(['middleware' => 'auth', 'auth.status'], function() {
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
    Route::resource('user', 'UserController');
});

Route::group(['middleware' => 'auth.storemanager'], function() {
    Route::resource('products', 'ProductController')->except('show', 'index');
    Route::resource('categories', 'CategoryController')->except('show', 'index');
});

//Route::get('/boats', 'CategoryController@boats');
Route::post('/search', 'SearchController@search');

Route::get('/users', 'UsersController@index');
Route::get('/status/update', 'UsersController@updateStatus')->name('users.update.status');

//Route::get('/images', 'ImageController@index');

