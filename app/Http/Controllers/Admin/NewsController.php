<?php

namespace App\Http\Controllers\Admin;

use App\NewsTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Custom class
use App\User;
use App\News;
use Illuminate\Support\Facades\Storage;
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
            'content' => 'required',
            'locale' => 'required'
        ]);

        $news = new News;

        $image = $request->file('thumbnail');
        $filename = 'image_'.time().'_'.$image->hashName();
        $news->translateOrNew($request->locale)->title = $request->title;
        $image->move(public_path('storage/news_thumbs'), $filename);
        $news->translateOrNew($request->locale)->filename = 'news_thumbs/' . $filename;
        $news->translateOrNew($request->locale)->content = $request->content;
        $news->save();

        $urlTranslation = url('admin/news') . '/' . $news->id;
        Session::flash('message', 'Berita berhasil diposkan! Anda dapat mentranslatenya melalui <a href="'.$urlTranslation.'">link ini</a>');
        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::where('id', $id)->first();

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

        $newsTranslation = NewsTranslation::where('news_id', $id)->get();
        return view('admin.news.translation.index')->with('newsTranslation', $newsTranslation)->with('news', $news)->with('translationCount', $translationCount);
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
