<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\NewsTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NewsTranslationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function create($id)
    {
        $news = News::find($id);
        return view('admin.news.translation.create')->with('news', $news);
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
            'content' => 'required',
            'locale' => 'required',
            'news_id' => 'required'
        ]);

        $news = News::find($request->news_id);

        $news->translateOrNew($request->locale)->title = $request->title;
        $news->translateOrNew($request->locale)->filename = $request->file('thumbnail')->store('news_thumbs_trans');
        Storage::move($news->translateOrNew($request->locale)->filename, 'public/' . $news->translateOrNew($request->locale)->filename);
        $news->translateOrNew($request->locale)->content = $request->content;
        $news->save();

        if($news->translateOrNew($request->locale)->slug == '' || $news->translateOrNew($request->locale)->slug == null) {
            $news->translateOrNew($request->locale)->slug = 'news-' . $news->id . '-' . $request->locale;
            $news->save();
        }

        Session::flash('message', 'Berita berhasil translate!');
        return redirect(route('news.show', $news->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = NewsTranslation::find($id);
        return view('admin.news.translation.edit')->with('news', $news);
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
            'thumbnail' => 'image',
            'content' => 'required',
            'news_id' => 'required'
        ]);

        $news = NewsTranslation::find($id);

        $news->title = $request->title;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $news->filename = $request->file('thumbnail')->store('news_thumbs_trans');
            Storage::move($news->filename, 'public/' . $news->filename);
        }
        $news->content = $request->content;
        $news->save();

        if($news->slug == '' || $news->slug == null) {
            $news->slug = 'news-' . $news->id . '-' . $request->locale;
            $news->save();
        }

        Session::flash('message', 'Translation berita berhasil diubah!');
        return redirect(route('news.show', $news->news_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = NewsTranslation::find($id)->news_id;
        NewsTranslation::destroy($id);
        Session::flash('message', 'Terjemahan berita berhasil dihapus!');
        return redirect(route('news.show', $news));
    }
}
