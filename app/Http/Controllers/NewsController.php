<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsComment;
use App\NewsTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NewsController extends Controller
{
    public function index() {
        $currentLocale = App::getLocale();
        $news = News::translatedIn($currentLocale)->orderBy('id', 'desc')->limit(3)->get();
        $newsPaginated = News::translatedIn($currentLocale)->orderBy('id', 'desc')->paginate(5);
        $popularPosts = News::translatedIn($currentLocale)->orderBy('view_count', 'desc')->limit(3)->get();
        return view('news-list')->with('news', $news)->with('newsPaginated', $newsPaginated)->with('popularPosts', $popularPosts)->with('currentLocale', $currentLocale);
    }

    public function show($slug) {
        $currentLocale = App::getLocale();
        $news = News::whereTranslation('slug', $slug)->firstOrFail();

        $newsComment = NewsComment::where('news_id', $news->id)->get();

        // New Code
        if ($news->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('news.show', $news->translate()->slug);
        }

        return view('news-detail')
            ->with('news', $news)
            ->with('newsComment', $newsComment)
            ->with('currentLocale', $currentLocale);
    }
}
