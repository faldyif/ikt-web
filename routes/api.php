<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Admin routes. Starts with /admin prefix
 */
Route::group(array('prefix'=>'v1'), function()
{
    Route::get('news/{news}', function (App\News $news) {
        return response()->json($news->translate('id'));
    });
});