<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Custom class
use App\User;
use App\News;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('id');
        $news = News::all();
        return view('admin.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'thumbnail' => 'required|image',
            'content' => 'required'
        ]);

        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->user_id = Auth::user()->id;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $filename = $request->thumbnail->store('news_thumbs');
            $news->filename = $filename;
        }
        $news->save();

        Session::flash('message', 'Berita berhasil diposkan! Anda dapat mempublikasikannya langsung ke sosial media melalui <a>link ini</a>');
        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.news.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $filename = $request->thumbnail->store('news_thumbs');
            $news->filename = $filename;
        }
        $news->touch();

        Session::flash('message', 'Berita berhasil diedit!');
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        Session::flash('message', 'Berita berhasil dihapus!');
        return redirect('admin/news');
    }
}
