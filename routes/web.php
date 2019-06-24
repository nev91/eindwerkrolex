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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontController@rolex')->name('rolex');
Route::get('/login', function () {return view('welcome');})->name('login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('classic', 'FrontController@classic')->name('classic');
Route::get('professional', 'FrontController@professional')->name('professional');
Route::get('product/{id}', 'FrontController@product')->name('product');
Route::get('shop', 'FrontController@shop')->name('shop');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('cart', 'FrontController@cart')->name('cart');
Route::get('addToCart/{id}', 'FrontController@addToCart')->name('add.cart');
Route::get('removeFromCart/{id}', 'FrontController@removeFromCart')->name('remove.cart');
Route::get('minusQty/{id}', 'FrontController@minusQty')->name('minusQty');
Route::get('plusQty/{id}', 'FrontController@plusQty')->name('plusQty');
Route::post('thankyou', 'FrontController@thankyou')->name('thankyou');
Route::resource('profile', 'ProfileController');

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
});

Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin');
    Route::resource('users', 'AdminUsersController');
    Route::resource('watches', 'WatchesController');
    Route::resource('roles', 'AdminRolesController');
    Route::resource('categories', 'AdminCategoriesController');
});
