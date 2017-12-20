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
        $newsThis = $news->translate('id');
        $newsThis = json_decode(json_encode($newsThis));
        $newsThis->imgs = array();
        $newsThis->imgs_url = array();
        $doc = new DOMDocument();
        $doc->loadHTML($newsThis->content);

        $imgs = $doc->getElementsByTagName('img');
        foreach ($imgs as $img) {
            $img->setAttribute('class', 'img-responsive');
            $newsThis->imgs[] = $img->ownerDocument->saveHTML($img);
            $newsThis->imgs_url[] = $img->getAttribute('src');
        }

        $newsThis->content = preg_replace("/<img[^>]+>/", "", $newsThis->content);

        return response()->json($newsThis);
    });
});