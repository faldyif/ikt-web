<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\User;
use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Thujohn\Twitter\Facades\Twitter;

class TwitterLoginController extends Controller
{
    public function index()
    {
        if(Auth::user()->twitter_oauth_token != NULL && Auth::user()->twitter_oauth_token_secret != NULL) {
            $request_token = [
                'token'  => Auth::user()->twitter_oauth_token,
                'secret' => Auth::user()->twitter_oauth_token_secret,
            ];

            Twitter::reconfig($request_token);

            $credentials = Twitter::getCredentials();

            return view('admin.twitter.login')->with('name', $credentials->screen_name);
        } else {
            return view('admin.twitter.login');
        }
    }

    public function callback() {
        // You should set this route on your Twitter Application settings as the callback
        // https://apps.twitter.com/app/YOUR-APP-ID/settings
        if (Session::has('oauth_request_token'))
        {
            $request_token = [
                'token'  => Session::get('oauth_request_token'),
                'secret' => Session::get('oauth_request_token_secret'),
            ];

            Twitter::reconfig($request_token);

            $oauth_verifier = false;

            if (Input::has('oauth_verifier'))
            {
                $oauth_verifier = Input::get('oauth_verifier');
                // getAccessToken() will reset the token for you
                $token = Twitter::getAccessToken($oauth_verifier);
            }

            if (!isset($token['oauth_token_secret']))
            {
                return Redirect::route('twitter.error')->with('flash_error', 'We could not log you in on Twitter.');
            }

            $credentials = Twitter::getCredentials();

            if (is_object($credentials) && !isset($credentials->error))
            {
                $user = \App\User::find(Auth::user()->id);

                $user->twitter_oauth_token = $token['oauth_token'];
                $user->twitter_oauth_token_secret = $token['oauth_token_secret'];
                $user->touch();

                return Redirect::to('/admin/twitter')->with('message', 'Berhasil log in dengan twitter!');
            }

            return Redirect::to('admin/twitter')->with('error', 'Terjadi kesalahan');
        }
    }

    public function login() {
        // your SIGN IN WITH TWITTER  button should point to this route
        $sign_in_twitter = true;
        $force_login = false;

        // Make sure we make this request w/o tokens, overwrite the default values in case of login.
        Twitter::reconfig(['token' => '', 'secret' => '']);
        $token = Twitter::getRequestToken(route('twitter.callback'));

        if (isset($token['oauth_token_secret']))
        {
            $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

            Session::put('oauth_state', 'start');
            Session::put('oauth_request_token', $token['oauth_token']);
            Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

            return Redirect::to($url);
        }

        return Redirect::route('twitter.error');
    }

    public function error() {
        // Something went wrong, add your own error handling here
    }

    public function logout() {
        $user = User::find(Auth::user()->id);

        $user->twitter_oauth_token = NULL;
        $user->twitter_oauth_token_secret = NULL;
        $user->touch();

        return Redirect::to('/admin/twitter')->with('message', 'Berhasil log out dari twitter');
    }

    public function testUploadMedia() {
        $uploaded_media = array();
        $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path('img\ikt-logo.png'))])->media_id_string;
        $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path('img\ikt-logo.png'))])->media_id_string;
        $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path('img\ikt-logo.png'))])->media_id_string;
        $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path('img\ikt-logo.png'))])->media_id_string;
        return Twitter::postTweet(['status' => 'Laravel is beautiful', 'media_ids' => $uploaded_media]);
    }

    public function postStatus(Request $request)
    {
        if(Auth::user()->twitter_oauth_token != NULL && Auth::user()->twitter_oauth_token_secret != NULL) {
            $news = News::find($request->id)->translate('id');

            $uploaded_media = array();
            $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path(str_replace('/', '\\', 'storage\\' . $news->filename)))])->media_id_string;

            $doc = new DOMDocument();
            $doc->loadHTML($news->content);
            $imageTags = $doc->getElementsByTagName('img');

            $i = 1;
            foreach($imageTags as $tag) {
                if($i == 4) break;
                $source = substr($tag->getAttribute('src'), 1);
                $uploaded_media[] = Twitter::uploadMedia(['media' => File::get(public_path(str_replace('/', '\\', $source)))])->media_id_string;
                $i++;
            }

            $status = Twitter::postTweet(['status' => $news->title . ' ' . url('id/berita') . '/' . $news->slug, 'media_ids' => $uploaded_media]);
            return redirect('admin/news')->with('message', 'Berhasil mempublikasikan di Twitter!');
        } else {
            return redirect('admin/twitter')->with('error', 'Anda harus login terlebih dahulu');
        }
    }
}
