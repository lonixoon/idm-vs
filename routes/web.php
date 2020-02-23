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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('index');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/support', 'HomeController@support')->name('support');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/partner', 'HomeController@partner')->name('partner');
