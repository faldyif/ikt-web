<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumComment;
use App\AlbumPhoto;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('gallery-list')->with('albums', $albums);
    }

    public function show($slug)
    {
        $album = Album::where('slug', $slug)->first();
        $albumPhotos = AlbumPhoto::where('album_id', $album->id)->get();
        $albumComments = AlbumComment::where('album_id', $album->id)->get();
        return view('gallery-detail')
            ->with('album', $album)
            ->with('albumPhotos', $albumPhotos)
            ->with('albumComments', $albumComments);
    }
}
