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

Route::get('/', 'BlogController@index')->name('index');
Route::get('/about', 'BlogController@about')->name('about');
Route::get('/contact', 'BlogController@contact')->name('contact');
Route::get('/post/{id}', 'BlogController@post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-content', 'HomeController@homeContent')->name('home.content');
Route::post('/home-content', 'HomeController@homeContentUpdate')->name('home.content');

Route::get('/about-content', 'HomeController@aboutContent')->name('about.content');
Route::post('/about-content', 'HomeController@aboutContentUpdate')->name('about.content');

Route::get('/contact-content', 'HomeController@contactContent')->name('contact.content');
Route::post('/contact-content', 'HomeController@contactContentUpdate')->name('contact.content');

/* Route::get('/data-table', function(){
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
})->name('post'); */