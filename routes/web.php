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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
 Route::get('/', 'DashboardController@dashboard')->name('admin.index');
 Route::resource('/category', 'CategoryController', ['as'=>'admin']);
 
 
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/addarticle', function () {
    return view('fisharticle');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
