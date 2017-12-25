<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsCommentController extends Controller
{
    public function comment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required|min:10',
            'news_id' => 'required'
        ]);

        $newsComment = new NewsComment;
        $newsComment->name = $request->name;
        $newsComment->email = $request->email;
        $newsComment->comment = $request->comment;
        $newsComment->news_id = $request->news_id;
        $newsComment->save();

        Session::flash('message', 'Komentar berhasil diposkan!');
        return redirect(route('news.detail', News::find($request->news_id)->slug));
    }
}
