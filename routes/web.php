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

Route::get('/', 'StaticPageController@index');

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
