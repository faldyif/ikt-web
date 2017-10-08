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
        $newsHasTranslation = array(
            'id' => $news->hasTranslation('id'),
            'en' => $news->hasTranslation('en'),
            'jp' => $news->hasTranslation('jp'),
        );
        $translationCount = 3;
        $selectField = array();
        if (!$newsHasTranslation['id']) {
            $selectField['id'] = 'Bahasa Indonesia';
            $translationCount--;
        }
        if (!$newsHasTranslation['en']) {
            $selectField['en'] = 'English';
            $translationCount--;
        }
        if (!$newsHasTranslation['jp']) {
            $selectField['jp'] = '日本語';
            $translationCount--;
        }

        return view('admin.news.translation.create')->with('news', $news)->with('selectField', $selectField);
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

        $image = $request->file('thumbnail');
        $filename = 'image_'.time().'_'.$image->hashName();
        $news->translateOrNew($request->locale)->title = $request->title;
        $image->move(public_path('storage/news_thumbs'), $filename);
        $news->translateOrNew($request->locale)->filename = 'news_thumbs/' . $filename;
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
            $image = $request->file('thumbnail');
            $filename = 'image_'.time().'_'.$image->hashName();
            $image->move(public_path('storage/news_thumbs'), $filename);
            $news->filename = 'news_thumbs/' . $filename;
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
