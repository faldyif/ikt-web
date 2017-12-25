<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AlbumCommentController extends Controller
{
    public function comment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required|min:10',
            'album_id' => 'required'
        ]);

        $albumComment = new AlbumComment;
        $albumComment->name = $request->name;
        $albumComment->email = $request->email;
        $albumComment->comment = $request->comment;
        $albumComment->album_id = $request->album_id;
        $albumComment->save();

        Session::flash('message', 'Komentar berhasil diposkan!');
        return redirect(route('gallery.detail', Album::find($request->album_id)->slug));
    }
}
