<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $newsPaginated = News::orderBy('id', 'desc')->paginate(5);
        $popularPosts = News::orderBy('view_count', 'desc')->limit(3)->get();
        return view('news-list')->with('news', $news)->with('newsPaginated', $newsPaginated)->with('popularPosts', $popularPosts);
    }

    public function show(News $news) {
        return view('news-detail')->with('news', $news);
    }
}
