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
    Route::resource('album', 'AlbumController', ['except' => ['show']]);
    Route::resource('berthing', 'BerthingPlanController');
    Route::resource('event', 'EventController');
    Route::resource('news', 'NewsController');
    Route::resource('news-translation', 'NewsTranslationController', ['only' => ['store', 'edit', 'update', 'destroy']]);
    Route::get('news-translation/create/{id}', 'NewsTranslationController@create')->name('news-translation.create');
    Route::get('album/{id}/photo', 'PhotoController@index')->name('photo.index');
    Route::get('album/{id}/create', 'PhotoController@create')->name('photo.create');
    Route::post('album/{id}', 'PhotoController@store')->name('photo.store');
    Route::delete('album/{id}/destroy/{idAlbum}', 'PhotoController@destroy')->name('photo.destroy');
    Route::resource('press-release', 'PressReleaseController');
    Route::resource('album-comment', 'AlbumCommentController', ['only' => ['index', 'destroy']]);
    Route::resource('news-comment', 'NewsCommentController', ['only' => ['index', 'destroy']]);
});

/*
 * Default auth routes. Includes /login
 */
Auth::routes();

// Home route
Route::get('/', 'IndexController@index')->name('welcome');
// Route for redirection from /home to /admin if logged in
Route::get(trans('routes.home'), 'HomeController@index')->name('home');

/*
 * About company route group
 */
Route::get(trans('routes.company.about'), function () {
    return view('about');
})->name('company.about');

Route::get(trans('routes.company.culture'), function () {
    return view('company-culture-1');
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

Route::get(trans('routes.company.subsidiary'), function () {
    return view('subcompany');
})->name('company.subsidiary');

Route::get(trans('routes.company.magazine'), function () {
    return view('magazine');
})->name('company.magazine');

Route::get(trans('routes.company.gcg'), function () {
    return view('gcg');
})->name('company.gcg');

Route::get(trans('routes.company.procurement'), function () {
    return view('procurement');
})->name('company.procurement');

Route::get(trans('routes.company.corporate-roadmap'), function () {
    return view('corporate-roadmap');
})->name('company.corporate-roadmap');

/*
 * Services route groups
 */
Route::get(trans('routes.service.stevedoring'), function () {
    return view('stevedoring');
})->name('service.stevedoring');

Route::get(trans('routes.service.receiving'), function () {
    return view('receiving');
})->name('service.receiving');

Route::get(trans('routes.service.pdi'), function () {
    return view('pdi');
})->name('service.pdi');

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
Route::get(trans('routes.gallery'), 'GalleryController@index')->name('gallery');
// Gallery list
Route::get(trans('routes.gallery').'/{slug}', 'GalleryController@show')->name('gallery.detail');
// Gallery album comment
Route::post(trans('routes.gallery'), 'AlbumCommentController@comment')->name('album-comment.post');

// News list
Route::get(trans('routes.news'), 'NewsController@index')->name('news');
// News detail
Route::get(trans('routes.news').'/{slug}', 'NewsController@show')->name('news.detail');
// News post comment
Route::post(trans('routes.news'), 'NewsCommentController@comment')->name('news-comment.post');

// Press Release
Route::get(trans('routes.press-release'), 'PressReleaseController@index')->name('press-release');
Route::get(trans('routes.press-release').'/{press_release}', function ($press_release) {
    return view('press-release-detail');
})->name('press-release.detail');

// Search
Route::get('search', 'SearchController@search')->name('search');

// Facilities
Route::get(trans('routes.facilities.fas'), function () {
    return view('facilities-prim');
})->name('facilities.fas');
Route::get(trans('routes.facilities.fas-1'), function () {
    return view('facilities-sec');
})->name('facilities.fas-1');
Route::get(trans('routes.facilities.fas-2'), function () {
    return view('facilities-tools');
})->name('facilities.fas-2');

// CSR
Route::get(trans('routes.csr'), function () {
    return view('csr');
})->name('csr');
Route::get(trans('routes.csr.education'), function () {
    return view('education');
})->name('csr.education');
Route::get(trans('routes.csr.youth'), function () {
    return view('youth');
})->name('csr.youth');
Route::get(trans('routes.csr.health'), function () {
    return view('health');
})->name('csr.health');
Route::get(trans('routes.csr.sport'), function () {
    return view('sport');
})->name('csr.sport');

// Annual Report
Route::get(trans('routes.annual'), function () {
    return view('annual-report');
})->name('annual');

// Statistic Data
Route::get(trans('routes.statistic'), function () {
    return view('statistic');
})->name('statistic');

/*
 * Temporary/testing routes
 */
// for tabs-layout template
Route::get('tabs', function () {
    return view('tabs-layout');
});
Route::get('ye', function () {
    return view('subcompany');
});
