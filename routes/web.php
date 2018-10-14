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
    return view('home')->withOnlySideBarInternalLinks(true);
})->name("home");

Route::get('/services/ab-automart', function () {
    return view('single-services.abautomart');
})->name('services.abautomart');

Route::post('/contact',"ContactUsController@sendMail")->name('contactUs');
