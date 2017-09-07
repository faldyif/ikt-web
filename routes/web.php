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

/*
 * Admin routes. Starts with /admin prefix
 */
Route::group(array('namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'auth'), function()
{
    Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
    Route::resource('album', 'AlbumController');
    Route::resource('berthing', 'BerthingPlanController');
    Route::resource('event', 'EventController');
    Route::resource('news', 'NewsController');
    Route::resource('photo', 'PhotoController');
});

/*
 * Default auth routes. Includes /login
 */
Auth::routes();

// Home route
Route::get('/', function () {
    return view('index');
})->name('welcome');
// Route for redirection from /home to /admin if logged in
Route::get(trans('routes.home'), 'HomeController@index')->name('home');

/*
 * About company route group
 */
Route::get(trans('routes.company.about'), function () {
    return view('about');
})->name('company.about');

Route::get(trans('routes.company.culture'), function () {
    return view('company-culture');
})->name('company.culture');

Route::get(trans('routes.company.history'), function () {
    return view('company-history');
})->name('company.history');

Route::get(trans('routes.company.profile'), function () {
    return view('profile');
})->name('company.profile');

Route::get(trans('routes.company.vision-mission'), function () {
    return view('vission-mission');
})->name('company.vision-mission');

Route::get(trans('routes.company.achievements'), function () {
    return view('achievement');
})->name('company.achievements');

Route::get(trans('routes.company.clients'), function () {
    return view('clients');
})->name('company.clients');

/*
 * Services route groups
 */
Route::get(trans('routes.service.stevedoring'), function () {
    return view('stevedoring');
})->name('service.stevedoring');

Route::get(trans('routes.service.receiving'), function () {
    return view('receiving');
})->name('service.receiving');

Route::get(trans('routes.service.vas'), function () {
    return view('vas');
})->name('service.vas');

/*
 * Dynamic route groups
 * Contains: Gallery, News, Press Release
 */
// Language changer
Route::get('lang/{language}', 'LanguageController@switchLang')->name('lang.switch');

// Gallery detail
Route::get(trans('routes.gallery'), function () {
    return view('gallery-list');
})->name('gallery');
// Gallery list
Route::get(trans('routes.gallery').'/{gallery}', function ($gallery) {
    return view('gallery-detail');
})->name('gallery.detail');

// News list
Route::get(trans('routes.news'), 'NewsController@index')->name('news');
// News detail
Route::get(trans('routes.news').'/{news}', 'NewsController@show')->name('news.detail');

// Press Release
Route::get(trans('routes.press-release'), function () {
    return view('press-release-list');
})->name('press-release');
Route::get(trans('routes.press-release').'/{$press_release}', function ($press_release) {
    return view('press-release-detail');
})->name('press-release.detail');


/*
 * Temporary/testing routes
 */
// for tabs-layout template
Route::get('tabs', function () {
    return view('tabs-layout');
});
Route::get('ye', function () {
    return view('gcg');
});
// Search view
Route::get('search', function () {
    return view('search-view');
});
