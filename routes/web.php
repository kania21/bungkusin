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

Route::get('/', 'MerchantController@index');

route:: get('/menu/{id}','MenuController@index');
#	route:: get('/menu','MenuController@index');
route:: post('/hasil','MenuController@hasil')->name('hasil');
route:: get('/bungkus','MerchantController@bungkus');
route:: get('/form','MerchantController@form');
route:: get('/proses','MerchantController@proses');
route:: get('/history','MerchantController@history');
route:: get('/merchant','MerchantController@merchant');
route:: get('/addmenu','MerchantController@addmenu');
route:: get('/editmenu','MerchantController@editmenu');
route:: get('/menumer','MerchantController@merchantmenu');
route:: get('/topup','UserController@topup');
route:: get('/transfer','UserController@transfer');
route:: get('/pulsa','UserController@pulsa');

route:: get('/withdraw','UserController@withdraw');
route:: get('/withdrawget','UserController@withdrawget');
route:: get('/daftar','UserController@daftar');


route::post('/updatemenu', "MenuController@updatemenu");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
