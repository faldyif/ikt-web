<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsComment;
use App\NewsTranslation;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $newsPaginated = News::orderBy('id', 'desc')->paginate(5);
        $popularPosts = News::orderBy('view_count', 'desc')->limit(3)->get();
        return view('news-list')->with('news', $news)->with('newsPaginated', $newsPaginated)->with('popularPosts', $popularPosts);
    }

    public function show($slug) {
        $news = News::whereTranslation('slug', $slug)->firstOrFail();

        $newsComment = NewsComment::where('news_id', $news->id)->get();

        // New Code
        if ($news->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('news.show', $news->translate()->slug);
        }

        return view('news-detail')
            ->with('news', $news)
            ->with('newsComment', $newsComment);
    }
}
