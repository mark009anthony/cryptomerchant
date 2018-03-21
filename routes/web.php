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
    return view('home');
});

Auth::routes();


Route::get('/online-payment','PagesController@online');

Route::get('/invoice','PagesController@invoice');

Route::get('/faq','PagesController@faq');

Route::get('/contact','PagesController@contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('register', 'Auth\RegisterController@create');

Route::post('inquiry','InquiryController@send');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
