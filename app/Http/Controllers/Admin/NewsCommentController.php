<?php

namespace App\Http\Controllers\Admin;

use App\NewsComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NewsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsComments = NewsComment::all();
        return view('admin.news.comment')
            ->with('newsComments', $newsComments);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsComment::destroy($id);
        Session::flash('message', 'Komentar berita berhasil dihapus!');
        return redirect(route('news-comment.index'));
    }
}
