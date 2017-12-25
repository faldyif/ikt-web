<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\User;
use DOMDocument;
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
                ->getLoginUrl(['email', 'publish_actions', 'user_posts', 'user_photos']);

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

    public function postPhoto(Request $request, LaravelFacebookSdk $fb)
    {
        if(Auth::user()->fb_token_timeout != NULL && Auth::user()->fb_token_timeout > \Carbon\Carbon::now()) {
            $data = [
                'source' => $fb->fileToUpload('img/1.jpg'),
                'published' => false,
            ];

            try {
                $response = $fb->post('/me/photos', $data, Auth::user()->fb_token);
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }

            $photoNode = $response->getGraphNode();

            $data = [
                'message' => 'Testing multi-photo post!',
                'attached_media[0]' => '{"media_fbid":"'.$photoNode['id'].'"}',
            ];

            try {
                $response = $fb->post('/me/feed', $data, Auth::user()->fb_token);
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }

            $postNode = $response->getGraphNode();

            echo var_dump($postNode);
        } else {
            return redirect('admin/facebook/login')->with('error', 'Anda harus login terlebih dahulu');
        }
    }

    public function postStatus(Request $request, LaravelFacebookSdk $fb)
    {
        if(Auth::user()->fb_token_timeout != NULL && Auth::user()->fb_token_timeout > \Carbon\Carbon::now())
        {
            // Init for photo list for parameter facebook post
            $photos[] = array();

            // Check is the signature checkbox ticked
            $isSignatureEnabled = $request->signature;

            // Get the content from post request
            $contentFromRequest = $request->content;

            // Define image list array
            $imageFromContent = array();

            // Load the HTML with dom document
            $doc = new DOMDocument();
            $doc->loadHTML($contentFromRequest);

            // Parse all the img tag from the html loaded before
            $imgs = $doc->getElementsByTagName('img');

            // Loop through elements array
            foreach($imgs as $tag)
            {
                // Get the source attribute
                $source = substr($tag->getAttribute('src'), 1);

                // Prepare parameters for facebook photo upload
                $data = [
                    'source' => $fb->fileToUpload($source),
                    'published' => false,
                ];

                // Upload the photo to facebook
                try {
                    $response = $fb->post('/me/photos', $data, Auth::user()->fb_token);
                } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                    dd($e->getMessage());
                }

                // Get the response and save it to array
                $subPhotoNode = $response->getGraphNode();
                $photos[] = '{"media_fbid":"'.$subPhotoNode['id'].'"}';
            }

            // Remove all the image tag from the content
            $contentForPost = preg_replace("/<img[^>]+>/", "", $contentFromRequest) . ($isSignatureEnabled ? Auth::user()->news_signature : ''); // TODO: This

            // Replace all the defined tags to newline
            $tags = array('</p>','<br />','<br>','<hr />','<hr>','</h1>','</h2>','</h3>','</h4>','</h5>','</h6>');
            $contentForPost = str_replace($tags,"\n",$contentForPost);

            // Prepare parameter for facebook post
            $data = [
                'message' => strip_tags($contentForPost),
                'attached_media' => $photos,
            ];

            // Post the content
            try {
                $response = $fb->post('/me/feed', $data, Auth::user()->fb_token);
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }

            $postNode = $response->getGraphNode();

            return redirect('admin/news')->with('message', 'Berhasil mempublikasikan di Facebook!');
        } else {
            return redirect('admin/facebook/login')->with('error', 'Anda harus login terlebih dahulu');
        }
    }

    public function changeSignature(Request $request)
    {
        $this->validate($request, [
            'signature' => 'required'
        ]);

        $user = Auth::user();
        $user->news_signature = $request->signature;
        $user->touch();

        Session::flash('message', 'Berhasil mengubah signature berita facebook!');
        return redirect('admin/facebook/login');
    }

}
