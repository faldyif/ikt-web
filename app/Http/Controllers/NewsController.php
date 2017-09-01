<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(\App\News $news) {
        return view('news-detail')->with('news', $news);
    }
}
