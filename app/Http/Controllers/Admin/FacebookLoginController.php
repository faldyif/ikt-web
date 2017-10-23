<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use Session;

class FacebookLoginController extends Controller
{
    public function showLogin(LaravelFacebookSdk $fb)
    {
        if(Auth::user()->fb_token_timeout != NULL && Auth::user()->fb_token_timeout > \Carbon\Carbon::now()) {
            try {
                $response = $fb->get('/me?fields=id,name,email', Auth::user()->fb_token);
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }

            $userNode = $response->getGraphUser();
            $name = $userNode->getName();

            return view('admin.facebook.login')->with('name', $name);
        } else {
            $login_url = $fb
                ->getLoginUrl(['email', 'user_events']);

            return view('admin.facebook.login')->with('login_url', $login_url);
        }
    }

    public function callback(LaravelFacebookSdk $fb)
    {
        // Obtain an access token.
        try {
            $token = $fb->getAccessTokenFromRedirect();
        } catch (FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Access token will be null if the user denied the request
        // or if someone just hit this URL outside of the OAuth flow.
        if (! $token) {
            // Get the redirect helper
            $helper = $fb->getRedirectLoginHelper();

            if (! $helper->getError()) {
                abort(403, 'Unauthorized action.');
            }

            // User denied the request
            dd(
                $helper->getError(),
                $helper->getErrorCode(),
                $helper->getErrorReason(),
                $helper->getErrorDescription()
            );
        }

        if (! $token->isLongLived()) {
            // OAuth 2.0 client handler
            $oauth_client = $fb->getOAuth2Client();

            // Extend the access token.
            try {
                $token = $oauth_client->getLongLivedAccessToken($token);
            } catch (FacebookSDKException $e) {
                dd($e->getMessage());
            }
        }

        $fb->setDefaultAccessToken($token);

        // Get basic info on the user from Facebook.
        try {
            $response = $fb->get('/me?fields=id,name,email');
        } catch (FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
        $facebook_user = $response->getGraphUser();

        // Update user token settings
        $user = User::find(Auth::user()->id);
        $user->fb_token = $token->getValue();
        $user->fb_token_timeout = $token->getExpiresAt();
        $user->touch();
//
//        return var_dump($user);

//        $user = App\User::createOrUpdateGraphNode($facebook_user);
//
//        // Log the user into Laravel
//        Auth::login($user);
//
        return redirect('/admin/facebook/login')->with('message', 'Sukses mengkoneksikan akun Facebook');
    }

    public function signOut()
    {
        // Update user token settings
        $user = User::find(Auth::user()->id);
        $user->fb_token = NULL;
        $user->fb_token_timeout = NULL;
        $user->touch();

        return redirect('/admin/facebook/login')->with('message', 'Sukses menghapus koneksi akun Facebook');
    }
}
