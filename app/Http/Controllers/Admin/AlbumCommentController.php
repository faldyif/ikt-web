<?php

namespace App\Http\Controllers\Admin;

use App\AlbumComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AlbumCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumComments = AlbumComment::all();
        return view('admin.album.comment')
            ->with('albumComments', $albumComments);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlbumComment::destroy($id);
        Session::flash('message', 'Komentar album berhasil dihapus!');
        return redirect(route('album-comment.index'));
    }
}
