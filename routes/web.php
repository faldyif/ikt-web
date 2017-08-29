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
    return view('index');
});

Route::get('gallery', function () {
    return view('gallery-list');
});

Route::get('about', function () {
    return view('about');
});

Route::get('agenda', function () {
    return view('agenda');
});

Route::get('company', function () {
    return view('company-history');
});

Route::get('gallery-detail', function () {
    return view('gallery-detail');
});

Route::get('news-detail', function () {
    return view('news-detail');
});

Route::get('news-list', function () {
    return view('news-list');
});