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

Route::group(['namespace' => 'FrontEnd'], function () {
    Route::get('/', 'Welcome@index');
    Route::get('/en', 'Welcome@en');


    Route::get('/en/contacts', 'Contacts@en');
    Route::get('/contacts', 'Contacts@index');

    Route::get('/en/service', 'Service@en');
    Route::get('/service', 'Service@index');

    Route::get('/en/product', 'Product@en');
    Route::get('/product', 'Product@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix'=>'admin', 'middleware' => 'auth'], function () {

    Route::resource('/', 'BatteriesController');
    Route::resource('/batteries', 'BatteriesController');

});


Route::any('/register', function () {
    return redirect('/admin');
});
