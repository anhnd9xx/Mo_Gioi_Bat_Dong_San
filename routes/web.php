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
// frontend
Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@intro');
Route::get('/hang-phong', 'HomeController@room');
Route::get('/dich-vu', 'HomeController@service');
Route::get('/dat-phong', 'HomeController@booking');
Route::get('/dang-ky', 'HomeController@sign_up');
Route::get('/dang-nhap', 'HomeController@sign_in');
Route::get('/phong-doi', 'HomeController@db_room');
Route::get('/phong-vip1', 'HomeController@vip1');
Route::get('/phong-vip2', 'HomeController@vip2');



//backend
Route::get('/admin', 'AdminController@index');


