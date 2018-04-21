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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data-table', function(){
	return view('data-tables');
})->name('data-table');
Route::get('/form', function(){
	return view('forms');
})->name('form');
Route::get('/about', function(){
	return view('about');
})->name('about');

Route::get('/contact', function(){
	return view('contact');
})->name('contact');

Route::get('/post', function(){
	return view('post');
})->name('post');