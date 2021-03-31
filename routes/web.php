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
Route::get('/homepage','App\Http\Controllers\UserController@index')->name('homepage');
Route::get('/about','App\Http\Controllers\UserController@about')->name('about');
Route::get('/services','App\Http\Controllers\UserController@services')->name('services');
Route::get('/blog','App\Http\Controllers\UserController@blog')->name('blog');
Route::get('/contact','App\Http\Controllers\UserController@contact')->name('contact');
Route::get('/price','App\Http\Controllers\UserController@pricing')->name('pricing');
Route::get('/team','App\Http\Controllers\UserController@team')->name('team');
Route::get('/product','App\Http\Controllers\UserController@product')->name('product');
Route::get('/productdetail/{id}','App\Http\Controllers\UserController@productdetail')->name('productdetail');
Route::get('/searchresult','App\Http\Controllers\UserController@search')->name('searchproduct');




//admin route
Route::get('/admin/home','App\Http\Controllers\AdminController@index')->name('admin.home');
Route::get('/admin/addcategory','App\Http\Controllers\AdminController@addcategory')->name('admin.addcategory');
Route::post('/admin/storecategory','App\Http\Controllers\AdminController@storecategory')->name('admin.storecategory');
Route::get('/admin/addproduct','App\Http\Controllers\AdminController@addproduct')->name('admin.addproduct');
Route::post('/admin/storeproduct','App\Http\Controllers\AdminController@storeproduct')->name('admin.storeproduct');
Route::get('/admin/showproduct','App\Http\Controllers\AdminController@showproduct')->name('admin.showproduct');
Route::get('/admin/showcategory','App\Http\Controllers\AdminController@showcategory')->name('admin.showcategory');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
