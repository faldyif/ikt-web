<?php

namespace App\Http\Controllers;

use App\Album;
use App\News;
use App\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        $latestNews = News::latest()->limit(10)->get();
        $latestAlbums = Album::latest()->limit(3)->get();
        return view('index')
            ->with('latestNews', $latestNews)
            ->with('latestAlbums', $latestAlbums)
            ->with('testimonials', $testimonials);
    }
    public function newhome()
    {
        $testimonials = Testimonial::latest()->get();
        $latestNews = News::latest()->limit(10)->get();
        $latestAlbums = Album::latest()->limit(3)->get();
        return view('newhome')
            ->with('latestNews', $latestNews)
            ->with('latestAlbums', $latestAlbums)
            ->with('testimonials', $testimonials);
    }
}
