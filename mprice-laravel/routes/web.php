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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Lets make Admin Route Group
Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

//Supplier routes
//Route::get('/supplier', 'SupplierController@index');
Route::prefix('supplier')->group(function() {
  Route::get('/login', 'Auth\SupplierLoginController@showLoginForm')->name('supplier.login');
  Route::post('/login', 'Auth\SupplierLoginController@login')->name('supplier.login.submit');
  Route::get('/', 'SupplierController@index')->name('supplier.dashboard');
});
//Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//Route::get('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
