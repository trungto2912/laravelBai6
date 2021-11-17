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

/*Route::get('/', function () {
    return view('layout');
});*/
Route::get('/', 'HomeController@index');
Route::get('trang-chu', 'HomeController@index');
Route::get('san-pham', 'HomeController@product');
Route::get('tin-tuc', 'HomeController@news');
Route::get('lien-he', 'HomeController@contact');
Route::get('login', 'AdminController@index');
Route::get('dashboard','AdminController@show_dashboard');
Route::post('admin-dashboard','AdminController@dashboard');
Route::get('logout','AdminController@logout');

Route::get('add-category-product','CategoryProduct@add_category_product');
Route::get('all-category-product','CategoryProduct@all_category_product');
Route::post('save-category-product','CategoryProduct@save_category_product');
Route::get('unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('active-category-product/{category_product_id}','CategoryProduct@active_category_product');
//Brand Product
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');
