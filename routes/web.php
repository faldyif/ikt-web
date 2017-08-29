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

Route::get('test', function () {
    return view('index');
});

Route::get('test-gallery', function () {
    return view('gallery-list');
});

Route::get('test-about', function () {
    return view('about');
});

Route::get('test-agenda', function () {
    return view('agenda');
});

Route::get('test-company', function () {
    return view('company-history');
});

Route::get('test-gallery-detail', function () {
    return view('gallery-detail');
});

Route::get('test-news-detail', function () {
    return view('news-detail');
});

Route::get('test-news-list', function () {
    return view('news-list');
});