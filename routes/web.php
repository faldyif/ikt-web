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

//Route::get('/', 'StaticPageController@index');

Route::group(array('namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'auth'), function()
{
    Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
    Route::resource('album', 'AlbumController');
    Route::resource('berthing-plan', 'BerthingPlanController');
    Route::resource('event', 'EventController');
    Route::resource('news', 'NewsController');
    Route::resource('photo', 'PhotoController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('index');
});

Route::get('gallery', function () {
    return view('gallery-list');
});

Route::get('gallery/detail', function () {
    return view('gallery-detail');
});

Route::get('about', function () {
    return view('about');
});

Route::get('agenda', function () {
    return view('agenda');
});

Route::get('history', function () {
    return view('company-history');
});

Route::get('news/detail', function () {
    return view('news-detail');
});

Route::get('news', function () {
    return view('news-list');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('clients', function () {
    return view('clients');
});
Route::get('achivement', function () {
    return view('achivement');
});
Route::get('press-release', function () {
    return view('press-release-list');
});
Route::get('press-release/detail', function () {
    return view('press-release-detail');
});
Route::get('search', function () {
    return view('search-view');
});

// for tabs-layout template
Route::get('tabs', function () {
    return view('tabs-layout');
});
