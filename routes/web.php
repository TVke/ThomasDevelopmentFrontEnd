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
Route::group(['prefix' => LaravelLocalization::setLocale()], function() {

    Route::view('/', 'home')->name('home');
    Route::view('/search', 'search')->name('search');
    Route::view('/art', 'details')->name('art');
    Route::view('/isearch', 'filter')->name('isearch');
    Route::view('/myauctions', 'auction.new')->name('myauctions');
    Route::view('/mybids', 'mybids')->name('mybids');
    Route::view('/contact', 'contact')->name('contact');

    Route::view('/faq', 'FAQ')->name('FAQ');

    Auth::routes();

    Route::get('/watchlist', 'HomeController@watchlist')->name('watchlist');
    Route::get('/profile', 'HomeController@profile')->name('profile');

});