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
// frontend
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
// backend
Route::get('/admin', 'AdminController@admin');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');
// category product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');

