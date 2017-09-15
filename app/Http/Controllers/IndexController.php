<?php

namespace App\Http\Controllers;

use App\Album;
use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->limit(10)->get();
        $latestAlbums = Album::latest()->limit(6)->get();
        return view('index')
            ->with('latestNews', $latestNews)
            ->with('latestAlbums', $latestAlbums);
    }
}
