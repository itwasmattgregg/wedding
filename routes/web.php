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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/our-story', function () {
    return view('our-story');
})->name('our-story');
Route::get('/registry', function () {
    return view('registry');
})->name('registry');
Route::get('/wedding-party', function () {
    return view('wedding-party');
})->name('wedding-party');
